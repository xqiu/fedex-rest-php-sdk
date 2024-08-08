<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: ShipStream\FedEx\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\OpenShipV1\Dto\FullSchemaGetOpenShipmentResults;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ShpcResponseVoGetOpenShipmentResults;
use ShipStream\FedEx\Request;

/**
 * Get Open Shipment Results
 *
 * This endpoint enables you to finalize the Open Shipment. Once an Open Shipment is confirmed, no
 * further changes can be done.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing
 * (CORS) mechanism.</i>
 */
class GetOpenShipmentResults extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        public FullSchemaGetOpenShipmentResults $fullSchemaGetOpenShipmentResults,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/ship/v1/openshipments/results';
    }

    public function createDtoFromResponse(
        Response $response,
    ): ShpcResponseVoGetOpenShipmentResults|ErrorResponseVo|ErrorResponseVo2 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ShpcResponseVoGetOpenShipmentResults::class,
            400, 500 => ErrorResponseVo::class,
            401, 403, 404, 503 => ErrorResponseVo2::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaGetOpenShipmentResults->toArray();
    }
}
