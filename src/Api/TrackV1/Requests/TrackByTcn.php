<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\TrackV1\Dto\FullSchemaTcn;
use ShipStream\FedEx\Api\TrackV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\TrackV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\TrackV1\Responses\TrkcResponseVoTcn;
use ShipStream\FedEx\Request;

/**
 * Track by TCN
 *
 * Use this endpoint to return tracking information based on a Tracking Control Number.<br><i>Note:
 * FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
 */
class TrackByTcn extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchemaTcn  $fullSchemaTcn  The request elements for Tracking by TCN request type.
     */
    public function __construct(
        public FullSchemaTcn $fullSchemaTcn,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/track/v1/tcn';
    }

    public function createDtoFromResponse(Response $response): TrkcResponseVoTcn|ErrorResponseVo|ErrorResponseVo2
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => TrkcResponseVoTcn::class,
            400, 500 => ErrorResponseVo::class,
            401, 403, 404, 503 => ErrorResponseVo2::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaTcn->toArray();
    }
}
