<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class PartyAddress1 extends Dto
{
    /**
     * @param  ?string[]  $streetLines  This is the combination of number, street name, etc. Maximum length per line is 35.<br>Example: 10 FedEx Parkway, Suite 302.<p><i>Note:<ul><li>At least one line is required.</li><li>Streetlines more than 3 will be ignored.</li><li>Empty lines should not be included</li><li>For SmartPost Shipments, only 30 characters from the individual street lines will be printed on the labels.</li></ul></i></p>
     * @param  ?string  $city  This is a placeholder for City Name. <br><br>Example: Beverly Hills
     * @param  ?string  $stateOrProvinceCode  This is a placeholder for State or Province code. State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br><br>Example: CA.<br><a onclick='loadDocReference("canadaprovincecodes")'>click here to see State or Province Code</a>
     * @param  ?string  $postalCode  This is the Postal code.<br><br>This is Optional for non postal-aware countries.<br>Maximum length is 10.<br><br>Example: 65247<br><a onclick='loadDocReference("postalawarecountries")'>click here to see Postal aware countries</a>
     * @param  ?string  $countryCode  This is the two-letter country code.<br><br>Maximum length is 2.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
     * @param  ?bool  $residential  Indicate whether this address is residential (as opposed to commercial).
     * @param  ?string  $geographicCoordinates  Indicates the geographic coordinates. <br> example: geographicCoordinates
     */
    public function __construct(
        public readonly ?array $streetLines = null,
        public readonly ?string $city = null,
        public readonly ?string $stateOrProvinceCode = null,
        public readonly ?string $postalCode = null,
        public readonly ?string $countryCode = null,
        public readonly ?bool $residential = null,
        public readonly ?string $geographicCoordinates = null,
    ) {
    }
}
