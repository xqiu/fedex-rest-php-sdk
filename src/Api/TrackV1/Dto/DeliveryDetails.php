<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class DeliveryDetails extends Dto
{
    protected static array $complexArrayTypes = [
        'deliveryOptionEligibilityDetails' => [DeliveryOptionElgibilityDetails::class],
    ];

    /**
     * @param  ?string  $receivedByName  Field which holds the name of the person who received the package, if applicable.<br> Example: Receiver
     * @param  ?string  $destinationServiceArea  Field which holds the destination service area code.<br> Example: EDDUNAVAILABLE
     * @param  ?string  $destinationServiceAreaDescription  Field which holds the description corresponding to the destination service area.<br> Example: Appointment Required
     * @param  ?string  $locationDescription  Field which holds the FedEx location description for the package destination.<br> Example: Receptionist/Front Desk
     * @param  ?AddressVo2  $actualDeliveryAddress  Address where the package was actually delivered. Contrast with destinationAddress, which is the location to which the package was intended to be delivered. Addresses may differ due to delivery to a behavior, hold at FedEx location, etc.
     * @param  ?bool  $deliveryToday  This element indicates whether the package will be delivered today. The value 'True', indicates that today is package delivery.<br> Example: true
     * @param  ?string  $locationType  Field which holds the FedEx location type code for the package destination. If  Location Type not available we will get empty value.
     * @param  ?string  $signedByName  Field which holds the name of the person who signed for the package, if applicable.<br> Example: Reciever
     * @param  ?string  $officeOrderDeliveryMethod  Field which identifies the method of office order delivery. 'Pickup' - the recipient will be picking up the office order from the FedEx Office Center. 'Shipment' - the office order will be delivered to the recipient as a FedEx shipment using the FedEx Service Type requested. 'Courier' - the office order will be delivered to the recipient by local courier. <br> Example: Courier
     * @param  ?string  $deliveryAttempts  Field which holds the number of delivery attempts made to deliver the package.<br> Example: 0
     * @param  DeliveryOptionElgibilityDetails[]|null  $deliveryOptionEligibilityDetails  Specifies eligibility type for the different delivery option.
     */
    public function __construct(
        public readonly ?string $receivedByName = null,
        public readonly ?string $destinationServiceArea = null,
        public readonly ?string $destinationServiceAreaDescription = null,
        public readonly ?string $locationDescription = null,
        public readonly ?AddressVo2 $actualDeliveryAddress = null,
        public readonly ?bool $deliveryToday = null,
        public readonly ?string $locationType = null,
        public readonly ?string $signedByName = null,
        public readonly ?string $officeOrderDeliveryMethod = null,
        public readonly ?string $deliveryAttempts = null,
        public readonly ?array $deliveryOptionEligibilityDetails = null,
    ) {
    }
}
