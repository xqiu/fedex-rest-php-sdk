<?php

declare(strict_types=1);

namespace ShipStream\FedEx\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaPickupAvailability extends Dto
{
    protected static array $complexArrayTypes = ['packageDetails' => [RequestedPickupPackageDetail::class]];

    /**
     * @param  string  $pickupAddress  Specify the address for which pickup availability inquiry has been made.
     * @param  string[]  $pickupRequestType  Specify pickup request type.
     * @param  string[]  $carriers  Specify the four letter code of a FedEx operating company thet meets your requirements.<br>Examples of FedEx Operating Companies are: <ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li></ul>
     * @param  string  $countryRelationship  Specify the country relationship among the shipments being picked up. Empty or incorrect values will result in to errors. <br><br><i>Note: <b>shipmentAttributes/serviceType</b> is required for domestic or international pickup availabilities.</i>
     * @param  ?string  $dispatchDate  Specify the date the package is to be picked up. The format is YYYY-MM-DD. If left blank, the system considers current date as dispatch date.<br> Example: 2020-01-01
     * @param  ?string  $packageReadyTime  Specify the time that the package will be ready for pickup. The time format is HH:MM:SS and it refers to the local timezone. The driver should pick up the package/shipment by the given pickup time.<br> Example: 15:00:00
     * @param  ?string  $customerCloseTime  Specify the latest time the driver gets access to pick up the package. The time format is in HH:MM:SS and it refers to the local timezone. The driver should pick up the package by the given pickup time.<br>Example: 18:00:00
     * @param  ?string  $pickupType  Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><i>Note: The value of this element does not specify dispatching the courier for package pickup.</i><br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     * @param  ?mixed[]  $shipmentAttributes  Specify the shipment details, such as service type, packaging type, weight and dimensions. <br><br><i>Note: serviceType is required for domestic or international pickup availabilities.</i>
     * @param  ?int  $numberOfBusinessDays  Specify number of business days to consider when checking availability.<br>For example if you are indicating pickupDate for a Saturday and you indicate 3, Saturday, Sunday and Monday will be considered. <br> Example: 3
     * @param  RequestedPickupPackageDetail[]|null  $packageDetails  This object is used to specify the package details.
     * @param  ?string  $associatedAccountNumber  The associated account number, which will be invoiced for the pickup.<br>Example:613787364.
     * @param  ?string  $associatedAccountNumberType  This represents a kind of legacy account number from a FedEx operating entity for the account number associated to the pickup.<br>Valid values are: FEDEX_EXPRESS<br>FEDEX_GROUND<br>
     */
    public function __construct(
        public readonly string $pickupAddress,
        public readonly array $pickupRequestType,
        public readonly array $carriers,
        public readonly string $countryRelationship,
        public readonly ?string $dispatchDate = null,
        public readonly ?string $packageReadyTime = null,
        public readonly ?string $customerCloseTime = null,
        public readonly ?string $pickupType = null,
        public readonly ?array $shipmentAttributes = null,
        public readonly ?int $numberOfBusinessDays = null,
        public readonly ?array $packageDetails = null,
        public readonly ?string $associatedAccountNumber = null,
        public readonly ?string $associatedAccountNumberType = null,
    ) {
    }
}
