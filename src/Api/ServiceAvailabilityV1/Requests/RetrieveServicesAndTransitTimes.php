<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: ShipStream\FedEx\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto\FullSchemaTransitTime;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Responses\TransitTimeOutputVo;
use ShipStream\FedEx\Request;

/**
 * Retrieve Services and Transit Times
 *
 * This endpoint gives the estimated transit times for a particular shipment.<br><i>Note: FedEx APIs do
 * not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
 */
class RetrieveServicesAndTransitTimes extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchemaTransitTime  $fullSchemaTransitTime  TransitTimeInputVO describes the details needed in order to get the transit times for a particular shipment.
     */
    public function __construct(
        public FullSchemaTransitTime $fullSchemaTransitTime,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/availability/v1/transittimes';
    }

    public function createDtoFromResponse(Response $response): TransitTimeOutputVo|ErrorResponseVo|ErrorResponseVo2
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => TransitTimeOutputVo::class,
            400, 401, 404 => ErrorResponseVo::class,
            403, 500 => ErrorResponseVo2::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaTransitTime->toArray();
    }
}
