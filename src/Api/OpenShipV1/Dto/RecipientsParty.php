<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class RecipientsParty extends Dto
{
    protected static array $complexArrayTypes = ['tins' => [TaxpayerIdentification::class]];

    /**
     * @param  PartyAddress  $address  This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
     * @param  PartyContact  $contact  Indicate the contact details for this shipment.
     * @param  TaxpayerIdentification[]|null  $tins  This is the tax identification number details.
     * @param  ?string  $deliveryInstructions  Specify the delivery instructions to be added with the shipment. Use with Ground Home Delivery.<br>Example: Delivery Instructions
     */
    public function __construct(
        public readonly PartyAddress $address,
        public readonly PartyContact $contact,
        public readonly ?array $tins = null,
        public readonly ?string $deliveryInstructions = null,
    ) {
    }
}
