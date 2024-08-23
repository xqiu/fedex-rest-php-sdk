<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: ShipStream\FedEx\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\ConsolidationV1\Dto\FullSchemaConfirmConsolidation;
use ShipStream\FedEx\Api\ConsolidationV1\Responses\ConfirmConsolidationResponse;
use ShipStream\FedEx\Api\ConsolidationV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\ConsolidationV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Request;

/**
 * Confirm Consolidations
 *
 * Confirm Consolidation endpoint is intended to confirm a new consolidation request with preliminary
 * information so that the customers can confirm the consolidation .
 */
class ConfirmConsolidations extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        public FullSchemaConfirmConsolidation $fullSchemaConfirmConsolidation,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/ship/v1/consolidations/confirmations';
    }

    public function createDtoFromResponse(
        Response $response,
    ): ConfirmConsolidationResponse|ErrorResponseVo|ErrorResponseVo2 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ConfirmConsolidationResponse::class,
            400, 500 => ErrorResponseVo::class,
            401, 403, 404, 503 => ErrorResponseVo2::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaConfirmConsolidation->toArray();
    }
}
