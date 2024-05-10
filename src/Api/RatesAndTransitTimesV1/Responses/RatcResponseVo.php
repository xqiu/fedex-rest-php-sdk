<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Responses;

use ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto\RateOutputVo;
use ShipStream\FedEx\Response;

final class RatcResponseVo extends Response
{
    /**
     * @param  ?string  $transactionId  The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
     * @param  ?string  $customerTransactionId  This element has a unique identifier added in your request, helps you match the request to the reply.<br>Example: XXXX_XXX123XXXXX
     * @param  ?RateOutputVo  $output  This is the response object for a rate quote request.
     */
    public function __construct(
        public readonly ?string $transactionId = null,
        public readonly ?string $customerTransactionId = null,
        public readonly ?RateOutputVo $output = null,
    ) {
    }
}
