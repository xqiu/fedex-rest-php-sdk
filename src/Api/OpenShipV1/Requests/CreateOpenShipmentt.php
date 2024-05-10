<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\OpenShipV1\Dto\FullSchemaCreateOpenShipment;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ErrorResponseVo503;
use ShipStream\FedEx\Api\OpenShipV1\Responses\ShpcResponseVoCreateOpenShipment;
use ShipStream\FedEx\Request;

/**
 * Create Open Shipmentt
 *
 * This endpoint helps you to create an opennnn shipment request withh the required shipping
 * information.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS)
 * mechanism....</i>
 */
class CreateOpenShipmentt extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchemaCreateOpenShipment  $fullSchemaCreateOpenShipment  The request elements required to create a Openshipment.
     */
    public function __construct(
        public FullSchemaCreateOpenShipment $fullSchemaCreateOpenShipment,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/ship/v1/openshipments/create';
    }

    public function createDtoFromResponse(
        Response $response,
    ): ShpcResponseVoCreateOpenShipment|ErrorResponseVo|ErrorResponseVo503 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ShpcResponseVoCreateOpenShipment::class,
            400, 401, 403, 404, 500 => ErrorResponseVo::class,
            503 => ErrorResponseVo503::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaCreateOpenShipment->toArray();
    }
}
