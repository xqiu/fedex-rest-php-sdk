<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class Party extends Dto
{
    /**
     * @param  ?Address  $address  This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the U.S.).
     * @param  ?AccountNumber  $accountNumber  This is the Account number details.<br><i>Note:<ul><li>If the paymentType is Sender, then the account number is optional in shippingChargesPayment.</li><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     * @param  ?Contact  $contact  Indicates the contact details.
     */
    public function __construct(
        public readonly ?Address $address = null,
        public readonly ?AccountNumber $accountNumber = null,
        public readonly ?Contact $contact = null,
    ) {
    }
}
