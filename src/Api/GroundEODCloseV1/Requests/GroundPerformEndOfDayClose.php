<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GroundEODCloseV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use ShipStream\FedEx\Api\GroundEODCloseV1\Dto\FullSchemaGeodPut;
use ShipStream\FedEx\Api\GroundEODCloseV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\GroundEODCloseV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\GroundEODCloseV1\Responses\ShpcResponseVo;
use ShipStream\FedEx\Request;

/**
 * groundPerformEndOfDayClose
 *
 * Use this endpoint to close the Ground shipments and generate the reports.<br><i>Note: FedEx APIs do
 * not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
 */
class GroundPerformEndOfDayClose extends Request
{
    protected Method $method = Method::PUT;

    public function __construct(
        public FullSchemaGeodPut $fullSchemaGeodPut,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/ship/v1/endofday';
    }

    public function createDtoFromResponse(Response $response): ShpcResponseVo|ErrorResponseVo|ErrorResponseVo2
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ShpcResponseVo::class,
            400, 401, 403, 404, 503 => ErrorResponseVo::class,
            500 => ErrorResponseVo2::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaGeodPut->toArray();
    }
}
