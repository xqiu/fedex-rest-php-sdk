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
use ShipStream\FedEx\Api\OpenShipV1\Dto\FullSchemaAddPackagesToOpenShipment;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ShpcResponseVoAddPackagesToOpenShipment;
use ShipStream\FedEx\Request;

/**
 * Add Open Shipment Packages
 *
 * This endpoint helps you to add packages to Open Shipment request with the required shipping
 * information before the shipment is confirmed.<br><i>Note: FedEx APIs do not support Cross-Origin
 * Resource Sharing (CORS) mechanism.</i>
 */
class AddOpenShipmentPackages extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchemaAddPackagesToOpenShipment  $fullSchemaAddPackagesToOpenShipment  The response elements received when a shipment is created.
     */
    public function __construct(
        public FullSchemaAddPackagesToOpenShipment $fullSchemaAddPackagesToOpenShipment,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/ship/v1/openshipments/packages';
    }

    public function createDtoFromResponse(
        Response $response,
    ): ShpcResponseVoAddPackagesToOpenShipment|ErrorResponseVo|ErrorResponseVo2 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ShpcResponseVoAddPackagesToOpenShipment::class,
            400, 500 => ErrorResponseVo::class,
            401, 403, 404, 503 => ErrorResponseVo2::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaAddPackagesToOpenShipment->toArray();
    }
}
