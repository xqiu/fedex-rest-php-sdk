<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class BrokerDetailBroker extends Dto
{
    /**
     * @param  string  $address  These are Broker address details.
     * @param  string  $contact  These are broker contact details such as Name, Email, PhoneNumber.
     * @param  ?AccountNumber  $accountNumber  This is the Account number details.<br><i>Note:<ul><li>If the paymentType is Sender, then the account number is optional in shippingChargesPayment.</li><li>In case if this is shipping account number, do use the account number used for creating Auth Token.</li></ul>
     */
    public function __construct(
        public readonly string $address,
        public readonly string $contact,
        public readonly ?AccountNumber $accountNumber = null,
    ) {
    }
}
