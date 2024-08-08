<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: ShipStream\FedEx\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\TrackV1\Dto\FullSchemaTrackingNumbers;
use ShipStream\FedEx\Api\TrackV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\TrackV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\TrackV1\Responses\TrkcResponseVoTrackingNumber;
use ShipStream\FedEx\Request;

/**
 * Track by Tracking Number
 *
 * This endpoint provides customers package tracking information based on a tracking number for various
 * shipping services.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS)
 * mechanism.</i>
 */
class TrackByTrackingNumber extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchemaTrackingNumbers  $fullSchemaTrackingNumbers  The request elements for Tracking by Tracking Number.
     */
    public function __construct(
        public FullSchemaTrackingNumbers $fullSchemaTrackingNumbers,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/track/v1/trackingnumbers';
    }

    public function createDtoFromResponse(
        Response $response,
    ): TrkcResponseVoTrackingNumber|ErrorResponseVo|ErrorResponseVo2 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => TrkcResponseVoTrackingNumber::class,
            400, 500 => ErrorResponseVo::class,
            401, 403, 404, 503 => ErrorResponseVo2::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaTrackingNumbers->toArray();
    }
}
