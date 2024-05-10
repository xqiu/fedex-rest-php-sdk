<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class AddressVo1 extends Dto
{
    /**
     * @param  ?string  $addressClassification  Specifies the FedEx classification type for an address. <br>Valid values are BUSINESS, RESIDENTIAL, MIXED, UNKNOWN.<br> Example: BUSINESS
     * @param  ?bool  $residential  Placeholder to indicate whether the address is residential (as opposed to commercial).
     * @param  ?string[]  $streetLines  Combination of number, street name, etc. At least one line is required for a valid physical address; empty lines should not be included.<br> Example: ["1043 North Easy Street", "Suite 999"]. <br>Note: Street lines is shown in response only in secured flow. For non secured flow, street lines is not shown in the response.
     * @param  ?string  $city  Conditional<br>The name of the city, town, etc. <br> Example: SEATTLE
     * @param  ?string  $urbanizationCode  Relevant only to addresses in Puerto Rico, where multiple addresses within the same postal code can have the same house number and street name. When this is the case, the urbanization code is needed to distinguish them.<br> Example: RAFAEL
     * @param  ?string  $stateOrProvinceCode  This is a placeholder for State or Province code. <br> Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
     * @param  ?string  $postalCode  Placeholder to specify postal code for the address. Postal Code is required for postal-aware countries.<br> Example: 98101<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     * @param  ?string  $countryCode  Placeholder for country code (2 characters) for the address.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     * @param  ?string  $countryName  Field holds the fully spelled out name of a country.<br> Example: United States
     */
    public function __construct(
        public readonly ?string $addressClassification = null,
        public readonly ?bool $residential = null,
        public readonly ?array $streetLines = null,
        public readonly ?string $city = null,
        public readonly ?string $urbanizationCode = null,
        public readonly ?string $stateOrProvinceCode = null,
        public readonly ?string $postalCode = null,
        public readonly ?string $countryCode = null,
        public readonly ?string $countryName = null,
    ) {
    }
}
