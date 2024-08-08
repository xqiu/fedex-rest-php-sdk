<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class Contact extends Dto
{
    /**
     * @param  ?string  $personName  Specify contact name.Max Length is 70.
     * @param  ?string  $emailAddress  Specify contact email address. Max length is 80.
     * @param  ?string  $phoneNumber  Specify contact person's phone number. Max length is 15.
     * @param  ?string  $phoneExtension  Specify contact person's phone extension. Max length is 6.
     * @param  ?string  $faxNumber  Specify contact person's fax number. Max length is 15.
     */
    public function __construct(
        public readonly ?string $personName = null,
        public readonly ?string $emailAddress = null,
        public readonly ?string $phoneNumber = null,
        public readonly ?string $phoneExtension = null,
        public readonly ?string $faxNumber = null,
    ) {
    }
}
