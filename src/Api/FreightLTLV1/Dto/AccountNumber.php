<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class AccountNumber extends Dto
{
    /**
     * @param  ?string  $value  Specify value of the account number. Maximum length is 9.<br> Example: XXXXX6789
     */
    public function __construct(
        public ?string $value = null,
    ) {}
}
