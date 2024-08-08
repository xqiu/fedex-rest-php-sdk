<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class Brokeraddress extends Dto
{
    /**
     * @param  ?string[]  $streetLines  This is the combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included. Maximum Length per line is 35.<br>Example: [10 FedEx Parkway, Suite 302, .etc.]
     * @param  ?string  $city  This is city name.<br> Example: Beverly Hills
     * @param  ?string  $stateOrProvinceCode  This is the state Or Province Code.State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2 <br> Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
     * @param  ?string  $postalCode  This is the postal code. <br> Example: 90210<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     * @param  ?string  $countryCode  This is the country code.<br>US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     * @param  ?bool  $residential  Indicate whether this address is residential (as opposed to commercial).
     * @param  ?string  $classification  Specifies the classification of the address. <br> Example: residential
     * @param  ?string  $geographicCoordinates  Specifies the geographic coordinates.<br> Example: geographicCoordinates
     * @param  ?string  $urbanizationCode  Specifies the urbanization code.
     * @param  ?string  $countryName  Specifies the country name.<br> Example: India
     */
    public function __construct(
        public readonly ?array $streetLines = null,
        public readonly ?string $city = null,
        public readonly ?string $stateOrProvinceCode = null,
        public readonly ?string $postalCode = null,
        public readonly ?string $countryCode = null,
        public readonly ?bool $residential = null,
        public readonly ?string $classification = null,
        public readonly ?string $geographicCoordinates = null,
        public readonly ?string $urbanizationCode = null,
        public readonly ?string $countryName = null,
    ) {
    }
}
