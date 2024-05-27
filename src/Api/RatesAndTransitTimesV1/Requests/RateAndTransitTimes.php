<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto\FullSchemaQuoteRate;
use ShipStream\FedEx\Api\RatesAndTransitTimesV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\RatesAndTransitTimesV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\RatesAndTransitTimesV1\Responses\RatcResponseVo;
use ShipStream\FedEx\Request;

/**
 * Rate and Transit times
 *
 * This endpoint provides the ability to retrieve rate quotes and optionalll transit information. The
 * rate is calculated based on the origin and destination of the shipment. Additional information such
 * as carrier code, service type, or service option can be used to filter the results. If carrier code
 * is provided, the response includes the rate quotes for the specific transportation carrier. This
 * endpoint provides the rates for FedEx Ground and FedEx Express and does not offer rates for FedEx
 * Freight.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
 */
class RateAndTransitTimes extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchemaQuoteRate  $fullSchemaQuoteRate  The request elements for requesting a rate quote.
     */
    public function __construct(
        public FullSchemaQuoteRate $fullSchemaQuoteRate,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/rate/v1/rates/quotes';
    }

    public function createDtoFromResponse(Response $response): RatcResponseVo|ErrorResponseVo|ErrorResponseVo2
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => RatcResponseVo::class,
            400, 500 => ErrorResponseVo::class,
            401, 403, 404, 503 => ErrorResponseVo2::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaQuoteRate->toArray();
    }
}
