<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class BrokerDetail extends Dto
{
    /**
     * @param  Party  $broker  Indicate the party to a transaction including the physical address, contact information and account number information.
     * @param  string  $type  This is Broker Type.
     * @param  ?string  $brokerCommitTimestamp  This is the delivery commitment date/time the shipment will arrive at the border. <br> Example: 2019-07-22
     * @param  ?string  $brokerCommitDayOfWeek  This is the delivery commitment day of the week the shipment will arrive at the border. <br> Example: SUNDAY
     * @param  ?string  $brokerLocationId  This is the FedEx location identifier for the broker. <br> Example: HKAA
     * @param  ?Brokeraddress  $brokerAddress  This is the broker address used for this shipment.
     * @param  ?int  $brokerToDestinationDays  These are number of days it will take for the shipment to make it from broker. <br> Example: 10
     */
    public function __construct(
        public Party $broker,
        public string $type,
        public ?string $brokerCommitTimestamp = null,
        public ?string $brokerCommitDayOfWeek = null,
        public ?string $brokerLocationId = null,
        public ?Brokeraddress $brokerAddress = null,
        public ?int $brokerToDestinationDays = null,
    ) {}
}
