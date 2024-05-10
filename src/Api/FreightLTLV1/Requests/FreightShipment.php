<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\FreightLTLV1\Dto\FullSchemaFreightShipment;
use ShipStream\FedEx\Api\FreightLTLV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\FreightLTLV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\FreightLTLV1\Responses\ShpcResponseVo;
use ShipStream\FedEx\Request;

/**
 * Freight Shipment
 *
 * This endpoint helps you to create a Freight LTL Shipment request with the required Freight LTL
 * Shipment information, and to retrieve information for an already in process shipment. It also allows
 * you to confirm and validate your shipment.<br><i>Note: FedEx APIs do not support Cross-Origin
 * Resource Sharing (CORS) mechanism.</i>
 */
class FreightShipment extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchemaFreightShipment  $fullSchemaFreightShipment  The request elements required to create a Freight2020Shipment.
     */
    public function __construct(
        public FullSchemaFreightShipment $fullSchemaFreightShipment,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/ship/v1/freight/shipments';
    }

    public function createDtoFromResponse(Response $response): ShpcResponseVo|ErrorResponseVo2|ErrorResponseVo
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ShpcResponseVo::class,
            400, 401, 403, 500, 503 => ErrorResponseVo2::class,
            404 => ErrorResponseVo::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaFreightShipment->toArray();
    }
}
