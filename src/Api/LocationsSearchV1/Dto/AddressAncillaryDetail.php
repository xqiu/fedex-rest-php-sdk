<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1\Dto;

use ShipStream\FedEx\Dto;

final class AddressAncillaryDetail extends Dto
{
    /**
     * @param  string  $locationInCity  This is the subdivision or community within a city for the given address.<br>Example: Forester subdivision
     * @param  string  $displayName  Display name.<br> Example: John
     * @param  ?string  $suite  This is the suite information for the given address.<br>Example: suite 201
     * @param  ?string  $adderssVerificationOverrideReason  Indicate the reason to override address verification.<br> Valid values:  <ul><li>CUSTOMER_PREFERENCE</li><li>CUSTOMER_PROVIDED_PROOF</li><li>MANUAL_VALIDATION</li></ul>
     * @param  ?string  $locationInProperty  This is location in a campus, such as exterior building annex A.<br>Example: south west of main office entrance
     * @param  ?string  $addtionalDescriptions  Specify additional information about the given address.<br>Example: north door
     * @param  ?string  $department  This is the department for the given address.<br>Example: Claims department
     * @param  ?string  $roomFloor  This is to specify the room or floor information for the given address.<br>Example: 5th floor
     * @param  ?string  $crossStreet  This is the cross street information for the given address.<br>Example: Union and Main
     * @param  ?string  $building  This is the building information for the given address.<br>Example: Building 300
     * @param  ?string  $apartment  This is the apartment information for the given address.<br>Example: Apartment 1503
     * @param  ?string  $room  This is room specific information for the given address.<br>Example: Room B-23
     */
    public function __construct(
        public readonly string $locationInCity,
        public readonly string $displayName,
        public readonly ?string $suite = null,
        public readonly ?string $adderssVerificationOverrideReason = null,
        public readonly ?string $locationInProperty = null,
        public readonly ?string $addtionalDescriptions = null,
        public readonly ?string $department = null,
        public readonly ?string $roomFloor = null,
        public readonly ?string $crossStreet = null,
        public readonly ?string $building = null,
        public readonly ?string $apartment = null,
        public readonly ?string $room = null,
    ) {
    }
}
