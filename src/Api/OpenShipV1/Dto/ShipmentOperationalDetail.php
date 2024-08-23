<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentOperationalDetail extends Dto
{
    /**
     * @param  ?string  $originServiceArea  Indicates the origin service area.<br>Example: A1
     * @param  ?string  $serviceCode  Indicates the service code.<br>Example: 010
     * @param  ?string  $airportId  Indicates the airport identifier.<br>Example: DFW
     * @param  ?string  $postalCode  Specifies the postal code.<br>Example: 38010<br><a onclick='loadDocReference("postalawarecountries")'>click here to see Postal aware countries</a>
     * @param  ?string  $scac  Indicates standard carrier alpha code.
     * @param  ?string  $deliveryDay  Specifies expected/estimated day of week of the delivery.<br>Example: TUE
     * @param  ?string  $originLocationId  This is the origin Location identifier.<br>Example: 678
     * @param  ?string  $countryCode  Indicate the two-letter country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
     * @param  ?string  $astraDescription  Specifies astra description.<br>Example: SMART POST
     * @param  ?int  $originLocationNumber  Specifies origin location number.<br>Example: 243
     * @param  ?string  $deliveryDate  Specifies delivery date for the shipment. The format is [YYYY-MM-DD]<br>Example: 2001-04-05
     * @param  ?string[]  $deliveryEligibilities  FedEx Ground delivery features for which this shipment may be eligible.<br>Example: ["deliveryEligibilities"]
     * @param  ?bool  $ineligibleForMoneyBackGuarantee  Indicates that this shipment is not eligible for money back guarantee.
     * @param  ?string  $maximumTransitTime  Maximum expected transit time.<br>Example: SEVEN_DAYS
     * @param  ?string  $destinationLocationStateOrProvinceCode  This is the state or province code of the shipment destination location, and is not necessarily the same as the postal state.<br>Example: GA<br><a onclick='loadDocReference("canadaprovincecodes")'>click here to see State or Province Code</a>
     * @param  ?string  $astraPlannedServiceLevel  Text describing planned delivery.<br>Example: TUE - 15 OCT 10:30A
     * @param  ?string  $destinationLocationId  Specifies the FedEx Destination Location Identifier.<br>Example: DALA
     * @param  ?string  $transitTime  Standard transit time per origin, destination, and service.<br>Example: TWO_DAYS
     * @param  ?string  $stateOrProvinceCode  This is a placeholder for State or Province code. State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br><br>Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>click here to see State or Province Code</a>
     * @param  ?int  $destinationLocationNumber  Indicates destination location number.<br>Example: 876
     * @param  ?string  $packagingCode  Indicates packaging code.<br>Example: 03
     * @param  ?string  $commitDate  This is committed date of delivery.<br>Example: 2019-10-15
     * @param  ?string  $publishedDeliveryTime  This is delivery time, as published in Service Guide.<br>Example: 10:30A
     * @param  ?string  $ursaSuffixCode  This is ursa suffix code.<br>Example: Ga
     * @param  ?string  $ursaPrefixCode  This is ursa prefix code.<br>Example: XH
     * @param  ?string  $destinationServiceArea  Specifies destination service area.<br>Example: A1
     * @param  ?string  $commitDay  Committed day of week of delivery.<br>Example: TUE
     * @param  ?string  $customTransitTime  Transit time based on customer eligibility.<br>Example: ONE_DAY
     */
    public function __construct(
        public ?string $originServiceArea = null,
        public ?string $serviceCode = null,
        public ?string $airportId = null,
        public ?string $postalCode = null,
        public ?string $scac = null,
        public ?string $deliveryDay = null,
        public ?string $originLocationId = null,
        public ?string $countryCode = null,
        public ?string $astraDescription = null,
        public ?int $originLocationNumber = null,
        public ?string $deliveryDate = null,
        public ?array $deliveryEligibilities = null,
        public ?bool $ineligibleForMoneyBackGuarantee = null,
        public ?string $maximumTransitTime = null,
        public ?string $destinationLocationStateOrProvinceCode = null,
        public ?string $astraPlannedServiceLevel = null,
        public ?string $destinationLocationId = null,
        public ?string $transitTime = null,
        public ?string $stateOrProvinceCode = null,
        public ?int $destinationLocationNumber = null,
        public ?string $packagingCode = null,
        public ?string $commitDate = null,
        public ?string $publishedDeliveryTime = null,
        public ?string $ursaSuffixCode = null,
        public ?string $ursaPrefixCode = null,
        public ?string $destinationServiceArea = null,
        public ?string $commitDay = null,
        public ?string $customTransitTime = null,
    ) {}
}
