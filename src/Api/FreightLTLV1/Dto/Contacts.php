<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class Contacts extends Dto
{
    /**
     * @param  ?string  $companyName  Indicates the contact person's company name.
     * @param  ?string  $personName  Indicates the contact person's name.
     * @param  ?string  $phoneNumber  Indicates the contact person's phone number.
     * @param  ?string  $phoneExtension  Indicates the contact person's phone extension.
     * @param  ?string  $emailAddress  contact person's email address.
     */
    public function __construct(
        public ?string $companyName = null,
        public ?string $personName = null,
        public ?string $phoneNumber = null,
        public ?string $phoneExtension = null,
        public ?string $emailAddress = null,
    ) {}
}
