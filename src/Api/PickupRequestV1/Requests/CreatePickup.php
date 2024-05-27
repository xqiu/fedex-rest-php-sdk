<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\PickupRequestV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\PickupRequestV1\Dto\FullSchemaCreatePickup;
use ShipStream\FedEx\Api\PickupRequestV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\PickupRequestV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\PickupRequestV1\Responses\PudcResponseVoCreatePickup;
use ShipStream\FedEx\Request;

/**
 * Create Pickup
 *
 * Use this endpoint to create a pickup request for a package.<br><i>Note: FedEx APIs do not support
 * Cross-Origin Resource Sharing (CORS) mechanism.</i>
 */
class CreatePickup extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchemaCreatePickup  $fullSchemaCreatePickup  Use this endpoint to create a pickup request.
     */
    public function __construct(
        public FullSchemaCreatePickup $fullSchemaCreatePickup,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/pickup/v1/pickups';
    }

    public function createDtoFromResponse(
        Response $response,
    ): PudcResponseVoCreatePickup|ErrorResponseVo|ErrorResponseVo2 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => PudcResponseVoCreatePickup::class,
            400, 500 => ErrorResponseVo::class,
            401, 403, 404, 503 => ErrorResponseVo2::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaCreatePickup->toArray();
    }
}
