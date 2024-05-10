<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class ContactAndAddress extends Dto
{
    /**
     * @param  ?Contact2  $contact  Indicate the contact details.
     * @param  ?Address1  $address  This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries. State or province code is mandatory for Puerto Rico.
     */
    public function __construct(
        public readonly ?Contact2 $contact = null,
        public readonly ?Address1 $address = null,
    ) {
    }
}
