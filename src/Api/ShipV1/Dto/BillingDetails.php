<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class BillingDetails extends Dto
{
    /**
     * @param  ?string  $billingCode  Indicates a billing code.
     * @param  ?string  $billingType  These are duties and taxes billing type.
     * @param  ?string  $aliasId  This is bill to alias identifier.
     * @param  ?string  $accountNickname  This is account nick name.
     * @param  ?string  $accountNumber  This is bill to account number.
     * @param  ?string  $accountNumberCountryCode  This is the country code of the account number.<br>Example: CA
     */
    public function __construct(
        public ?string $billingCode = null,
        public ?string $billingType = null,
        public ?string $aliasId = null,
        public ?string $accountNickname = null,
        public ?string $accountNumber = null,
        public ?string $accountNumberCountryCode = null,
    ) {}
}
