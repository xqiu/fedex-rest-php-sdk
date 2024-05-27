<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\AddressValidationV1\Responses;

use ShipStream\FedEx\Api\AddressValidationV1\Dto\AddressResolutionOutputVov;
use ShipStream\FedEx\Response;

final class AdvcResponseVo extends Response
{
    /**
     * @param  ?string  $transactionId  Unique identifier returned in the reply and helps you match the request to the reply.<br>Example: XXX_ORDERXXXX789
     * @param  ?string  $customerTransactionId  This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br><br> Example: XXX_ORDERXXXX789
     * @param  ?AddressResolutionOutputVov  $output  Indicates the resolved address parameters.
     */
    public function __construct(
        public readonly ?string $transactionId = null,
        public readonly ?string $customerTransactionId = null,
        public readonly ?AddressResolutionOutputVov $output = null,
    ) {
    }
}
