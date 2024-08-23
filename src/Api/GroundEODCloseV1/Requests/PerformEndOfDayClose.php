<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: ShipStream\FedEx\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GroundEODCloseV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\GroundEODCloseV1\Dto\FullSchemaReprintPost;
use ShipStream\FedEx\Api\GroundEODCloseV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\GroundEODCloseV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\GroundEODCloseV1\Responses\ShpcResponseVo;
use ShipStream\FedEx\Request;

/**
 * performEndOfDayClose
 *
 * Use this endpoint to reprint the closed Ground shipments reports.<br><i>Note: FedEx APIs do not
 * support Cross-Origin Resource Sharing (CORS) mechanism.</i>
 */
class PerformEndOfDayClose extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        public FullSchemaReprintPost $fullSchemaReprintPost,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/ship/v1/endofday';
    }

    public function createDtoFromResponse(Response $response): ShpcResponseVo|ErrorResponseVo|ErrorResponseVo2
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ShpcResponseVo::class,
            400, 401, 403, 404, 503 => ErrorResponseVo::class,
            500 => ErrorResponseVo2::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaReprintPost->toArray();
    }
}
