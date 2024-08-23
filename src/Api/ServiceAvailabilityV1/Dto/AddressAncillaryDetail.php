<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class AddressAncillaryDetail extends Dto
{
    /**
     * @param  ?string  $locationInCity  This is the Subdivision or community within a city for the given address.<br> Forester subdivision
     * @param  ?string  $suite  This is the suite information for the given address.
     * @param  ?string  $addressVerificationOverrideReason  Specifies the reason to override address verification.<br> Valid values:  CUSTOMER_PREFERENCE, CUSTOMER_PROVIDED_PROOF, MANUAL_VALIDATION
     * @param  ?string  $locationInProperty  This is location in a campus, such as exterior building annex A.<br> Example: south west of main office entrance.
     * @param  ?string  $addtionalDescriptions  Specifies any additional information about the given address.<br>Example: north door
     * @param  ?string  $department  This is the department for the given address.<br>Example: Claims department
     * @param  ?string  $roomFloor  This is to specify the room or floor information for the given address.<br>Example: 5th floor
     * @param  ?string  $crossStreet  This is the cross street information for the given address.<br>Example: Union and Main
     * @param  ?string  $building  This is the building information for the given address.<br>Example: Building 300
     * @param  ?string  $apartment  This is the apartment information for the given address.<br>Example: Apartment 1503
     * @param  ?string  $room  This is room specific information for the given address.<br>Example: Room B-23
     */
    public function __construct(
        public ?string $locationInCity = null,
        public ?string $suite = null,
        public ?string $addressVerificationOverrideReason = null,
        public ?string $locationInProperty = null,
        public ?string $addtionalDescriptions = null,
        public ?string $department = null,
        public ?string $roomFloor = null,
        public ?string $crossStreet = null,
        public ?string $building = null,
        public ?string $apartment = null,
        public ?string $room = null,
    ) {}
}
