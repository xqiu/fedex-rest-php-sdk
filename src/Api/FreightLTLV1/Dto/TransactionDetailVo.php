<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class TransactionDetailVo extends Dto
{
    /**
     * @param  ?string  $transactionDetails  Includes data returned which governs data payload language/translations. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.<br>Example: transactionDetails
     * @param  ?string  $transactionId  This element has a unique identifier added in your request, helps you match the request to the reply. Maximum of 40 characters allowed.<br>Example: XXXX_XXX123XXXXX.
     */
    public function __construct(
        public readonly ?string $transactionDetails = null,
        public readonly ?string $transactionId = null,
    ) {
    }
}
