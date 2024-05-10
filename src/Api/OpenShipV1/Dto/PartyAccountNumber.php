<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class PartyAccountNumber extends Dto
{
    /**
     * @param  ?string  $value  The account number value.Value is required if the paymentType is RECIPIENT, THIRD_PARTY or COLLECT. <br>Example: Your account number
     */
    public function __construct(
        public readonly ?string $value = null,
    ) {
    }
}
