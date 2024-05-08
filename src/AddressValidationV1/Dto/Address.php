<?php

declare(strict_types=1);

namespace ShipStream\FedEx\AddressValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class Address extends Dto
{
    /**
     * @param  string[]  $streetLines  Indicate the combination of number, street name. etc. <br>Example: ["7372 PARKRIDGE BLVD", "APT 286, 2903 sprank"].<br><br>Note:<ul><li>At least one line is required for a valid physical address; empty lines should not be included.</li><li>Maximum up to three lines & no error check if entered more than this limit.</li><li>Recommended limit per line is 35 characters.</li></ul>
     * @param  string  $city  Indicate the name of city, town, etc.<br><br>Note: City is mandatory, When postalcode is not provided and includeResolutionTokens value is true in the request.
     * @param  string  $postalCode  Indicate the Postal Code which is an identification code of a region (usually small) for easier and accurate mail/package delivery. The format and presence of this field may vary depending on the country.<br> Example: 75063-8659<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal Code</a>
     * @param  ?string  $stateOrProvinceCode  Indicate the State or Province codes. The Format and presence of this field may vary depending on the country.<br>Example: TX<br><a onclick='loadDocReference("canadaprovincecodes")'> Click here to see State Or Province Code</a>. Maximum length is 2
     * @param  ?string  $countryCode  Specify the ISO Alpha2 code of the country.<br>Example: US <br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     */
    public function __construct(
        public readonly array $streetLines,
        public readonly string $city,
        public readonly string $postalCode,
        public readonly ?string $stateOrProvinceCode = null,
        public readonly ?string $countryCode = null,
    ) {
    }
}
