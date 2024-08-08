<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: ShipStream\FedEx\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use ShipStream\FedEx\Api\OpenShipV1\Dto\FullSchemaDeleteOpenShipment;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ShpcResponseVoDeleteOpenShipment;
use ShipStream\FedEx\Request;

/**
 * Delete Open Shipment
 *
 * This endpoint helps you to delete a Openshipment request with the required shipping information
 * before the shipment is confirmed.<br><i>Note: FedEx APIs do not support Cross-Origin Resource
 * Sharing (CORS) mechanism.</i>
 */
class DeleteOpenShipment extends Request
{
    protected Method $method = Method::PUT;

    public function __construct(
        public FullSchemaDeleteOpenShipment $fullSchemaDeleteOpenShipment,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/ship/v1/openshipments/delete';
    }

    public function createDtoFromResponse(
        Response $response,
    ): ShpcResponseVoDeleteOpenShipment|ErrorResponseVo|ErrorResponseVo2 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ShpcResponseVoDeleteOpenShipment::class,
            400, 500 => ErrorResponseVo::class,
            401, 403, 404, 503 => ErrorResponseVo2::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaDeleteOpenShipment->toArray();
    }
}
