<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\PickupRequestV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use ShipStream\FedEx\Api\PickupRequestV1\Dto\FullSchemaCancelPickup;
use ShipStream\FedEx\Api\PickupRequestV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\PickupRequestV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\PickupRequestV1\Responses\PudcResponseVoCancelPickup;
use ShipStream\FedEx\Request;

/**
 * Cancel Pickup
 *
 * Use this endpoint to cancel the already scheduled pickup request. <br>Note: A failure notification
 * will be sent if you attempt to cancel a pickup after the FedEx courier has been dispatched to the
 * pickup location.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS)
 * mechanism.</i>
 */
class CancelPickup extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param  FullSchemaCancelPickup  $fullSchemaCancelPickup  This is a placeholder for cancelled pickup request elements.
     */
    public function __construct(
        public FullSchemaCancelPickup $fullSchemaCancelPickup,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/pickup/v1/pickups/cancel';
    }

    public function createDtoFromResponse(
        Response $response,
    ): PudcResponseVoCancelPickup|ErrorResponseVo|ErrorResponseVo2 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => PudcResponseVoCancelPickup::class,
            400, 500 => ErrorResponseVo::class,
            401, 403, 404, 503 => ErrorResponseVo2::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaCancelPickup->toArray();
    }
}
