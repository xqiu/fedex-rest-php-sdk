<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class PartyCreatePickupLtl extends Dto
{
    /**
     * @param  ?ContactCreatePickup  $contact  Indicates the contact details for the party such as name, phonenumber.
     * @param  ?AddressLtl  $address  Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     * @param  ?mixed[]  $accountNumber  Specify the FedEx Account number. <br>Example: Your account number
     * @param  ?string  $deliveryInstructions  Indicates the detailed instructions for delivery.This is used with Ground Home Delivery.
     */
    public function __construct(
        public readonly ?ContactCreatePickup $contact = null,
        public readonly ?AddressLtl $address = null,
        public readonly ?array $accountNumber = null,
        public readonly ?string $deliveryInstructions = null,
    ) {
    }
}
