<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class PartyAccountNumber extends Dto
{
    /**
     * @param  ?string  $value  This is the account number. Maximum length is 9. <br>Example: Your account number
     */
    public function __construct(
        public readonly ?string $value = null,
    ) {
    }
}
