<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightDirectDataDetails extends Dto
{
    protected static array $complexArrayTypes = ['phoneNumberDetails' => FreightPhoneNumberDetail::class];

    /**
     * @param  ?string  $type  This field provides the type for FedexFreight Detail service.<br> Example: <ul><li>BASIC</li><li>BASIC_BY_APPOINTMENT</li><li>PREMIUM</li><li>STANDARD</li></ul>
     * @param  ?string  $transportationType  This field provides the transportation type for Fedex Freight Detail service.<br> Example: <ul><li>DELIVERY</li><li>PICKUP</li></ul>
     * @param  ?string  $eMailAddress  This field provides the email address associated with the freight user
     * @param  FreightPhoneNumberDetail[]|null  $phoneNumberDetails  This field prvides the phone number details associated with freight services
     */
    public function __construct(
        public ?string $type = null,
        public ?string $transportationType = null,
        public ?string $eMailAddress = null,
        public ?array $phoneNumberDetails = null,
    ) {}
}
