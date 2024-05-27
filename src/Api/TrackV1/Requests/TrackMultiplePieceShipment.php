<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\TrackV1\Dto\FullSchemaMultiplePieceShipment;
use ShipStream\FedEx\Api\TrackV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\TrackV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\TrackV1\Responses\TrkcResponseVoAssociated;
use ShipStream\FedEx\Request;

/**
 * Track Multiple Piece Shipment
 *
 * This endpoint returns tracking information for multiplee piece shipments, Group MPS, or an
 * outbounddd shipment which is linked to a return shipment.<br><i>Note: FedEx APIs do not support
 * Cross-Origin Resource Sharing (CORS) mechanism.</i>
 */
class TrackMultiplePieceShipment extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchemaMultiplePieceShipment  $fullSchemaMultiplePieceShipment  The request elements for Tracking by associated shipment.
     */
    public function __construct(
        public FullSchemaMultiplePieceShipment $fullSchemaMultiplePieceShipment,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/track/v1/associatedshipments';
    }

    public function createDtoFromResponse(Response $response): TrkcResponseVoAssociated|ErrorResponseVo|ErrorResponseVo2
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => TrkcResponseVoAssociated::class,
            400, 500 => ErrorResponseVo::class,
            401, 403, 404, 503 => ErrorResponseVo2::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaMultiplePieceShipment->toArray();
    }
}
