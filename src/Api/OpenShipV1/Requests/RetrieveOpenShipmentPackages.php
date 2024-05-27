<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\OpenShipV1\Dto\FullSchemaRetrievePackageInOpenShipment;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ShpcResponseVoRetrievePackageInOpenShipment;
use ShipStream\FedEx\Request;

/**
 * Retrieve Open Shipment Packages
 *
 * This endpoint helps the user to RETRIEVE specific package request details of the Open Shipment that
 * is created.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS)
 * mechanism.</i>
 */
class RetrieveOpenShipmentPackages extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        public FullSchemaRetrievePackageInOpenShipment $fullSchemaRetrievePackageInOpenShipment,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/ship/v1/openshipments/packages/retrieve';
    }

    public function createDtoFromResponse(
        Response $response,
    ): ShpcResponseVoRetrievePackageInOpenShipment|ErrorResponseVo|ErrorResponseVo2 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ShpcResponseVoRetrievePackageInOpenShipment::class,
            400, 500 => ErrorResponseVo::class,
            401, 403, 404, 503 => ErrorResponseVo2::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaRetrievePackageInOpenShipment->toArray();
    }
}
