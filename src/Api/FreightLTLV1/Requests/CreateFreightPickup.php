<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\FreightLTLV1\Dto\FullSchemaCreatePickup;
use ShipStream\FedEx\Api\FreightLTLV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\FreightLTLV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\FreightLTLV1\Responses\ErrorResponseVo5032;
use ShipStream\FedEx\Api\FreightLTLV1\Responses\PudcResponseVo;
use ShipStream\FedEx\Request;

/**
 * Create Freight Pickup
 *
 * This endpoint helps you to create a freight pickup request for a package to be picked
 * up.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
 */
class CreateFreightPickup extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchemaCreatePickup  $fullSchemaCreatePickup  The request elements to create a pickup.
     */
    public function __construct(
        public FullSchemaCreatePickup $fullSchemaCreatePickup,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/pickup/v1/freight/pickups';
    }

    public function createDtoFromResponse(
        Response $response,
    ): PudcResponseVo|ErrorResponseVo2|ErrorResponseVo|ErrorResponseVo5032 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => PudcResponseVo::class,
            400, 401, 403, 500 => ErrorResponseVo2::class,
            404 => ErrorResponseVo::class,
            503 => ErrorResponseVo5032::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaCreatePickup->toArray();
    }
}
