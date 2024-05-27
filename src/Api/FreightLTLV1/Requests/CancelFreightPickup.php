<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use ShipStream\FedEx\Api\FreightLTLV1\Dto\FullSchemaCancelFreightPickup;
use ShipStream\FedEx\Api\FreightLTLV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\FreightLTLV1\Responses\PudcResponseVoCancelPickup;
use ShipStream\FedEx\Request;

/**
 * Cancel Freight Pickup
 *
 * Use this endpoint to cancel the already scheduled freight pickup request. Note a failure
 * notification will be sent if you attempt to cancel a pickup after the FedEx courier has been
 * dispatched to the pickup location.<br><i>Note: FedEx APIs do not support Cross-Origin Resource
 * Sharing (CORS) mechanism.</i>
 */
class CancelFreightPickup extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param  FullSchemaCancelFreightPickup  $fullSchemaCancelFreightPickup  This is a placeholder for cancelled pickup request elements.
     */
    public function __construct(
        public FullSchemaCancelFreightPickup $fullSchemaCancelFreightPickup,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/pickup/v1/freight/pickups/cancel';
    }

    public function createDtoFromResponse(Response $response): PudcResponseVoCancelPickup|ErrorResponseVo
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => PudcResponseVoCancelPickup::class,
            400, 401, 403, 404, 500, 503 => ErrorResponseVo::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaCancelFreightPickup->toArray();
    }
}
