<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1\Dto;

use ShipStream\FedEx\Dto;

final class Address extends Dto
{
    /**
     * @param  string  $countryCode  This is the Two-letter country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     * @param  ?string[]  $streetLines  This is a combination of number, street name, etc. <br><i>Note: Streetlines more than 3 will be ignored. Empty lines should not be included.</i><br>Example: [\"10 FedEx Parkway\", \"Suite 302\"]
     * @param  ?string  $city  This is a placeholder for City Name. <br> City or PostalCode is mandatory when search criteria is ADDRESS or PHONE_NUMBER<br> Example: Beverly Hills
     * @param  ?string  $stateOrProvinceCode  This is a placeholder for State or Province code. <br>Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
     * @param  ?string  $postalCode  This is placeholder for postal code.<br><i>Note: <ul><li>Postal code is required for postal-aware countries.</li>City or PostalCode is mandatory when search criteria is ADDRESS or PHONE_NUMBER</li></ul></i>Example: 38127<br><br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     * @param  ?bool  $residential  Indicate whether this address is Residential as opposed to Commercial.<br>Valid Values: True or False.
     * @param  ?string  $addressVerificationId  This is the address verification identifier. <br> Example: MARKET_LAUNCH
     * @param  ?string  $addressClassification  The business residential indicators.
     * @param  ?string  $addressClassificationConfidence  The confidence of business residential classification business residential indicators.
     */
    public function __construct(
        public readonly string $countryCode,
        public readonly ?array $streetLines = null,
        public readonly ?string $city = null,
        public readonly ?string $stateOrProvinceCode = null,
        public readonly ?string $postalCode = null,
        public readonly ?bool $residential = null,
        public readonly ?string $addressVerificationId = null,
        public readonly ?string $addressClassification = null,
        public readonly ?string $addressClassificationConfidence = null,
    ) {
    }
}
