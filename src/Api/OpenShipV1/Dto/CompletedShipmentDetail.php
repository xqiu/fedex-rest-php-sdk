<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class CompletedShipmentDetail extends Dto
{
    protected static array $complexArrayTypes = ['completedPackageDetails' => [CompletedPackageDetail::class]];

    /**
     * @param  CompletedPackageDetail[]|null  $completedPackageDetails  Indicates the completed package details.
     * @param  ?ShipmentOperationalDetail  $operationalDetail  Indicates the shipment level operational information.
     * @param  ?string  $carrierCode  Specifies which carrier should be included.<br>Example: FDXE
     * @param  ?CompletedHoldAtLocationDetail  $completedHoldAtLocationDetail  This is default holding location information when HOLD_AT_LOCATION special service is requested and the client does not specify the hold location address.
     * @param  ?CompletedEtdDetail  $completedEtdDetail  These are completed ETD details when ELECTRONIC_TRADE_DOCUMENTS Special service type is requested
     * @param  ?string  $packagingDescription  Specifies packaging description.
     * @param  ?TrackingId  $masterTrackingId  Indicates the tracking details for the package.
     * @param  ?ServiceDescription  $serviceDescription  Descriptions for a service.
     * @param  ?bool  $usDomestic  Indicates whether or not this is an intra-U.S. shipment.
     * @param  ?CompletedHazardousShipmentDetail  $hazardousShipmentDetail  Completed shipment level hazardous commodity information.
     * @param  ?ShipmentRating  $shipmentRating  All shipment-level rating data for this shipment, which may include data for multiple rate types.
     * @param  ?DocumentRequirementsDetail  $documentRequirements  Indicates the document requirements detail.
     * @param  ?string  $exportComplianceStatement  For US export shipments requiring an EEI, enter the ITN number received from AES when you filed your shipment or the FTR (Foreign Trade Regulations) exemption number.The proper format for an ITN number is AES XYYYYMMDDNNNNNN where YYYYMMDD is date and NNNNNN are numbers generated by the AES.<br> Example: AESX20220714987654<br>Note: The ITN or FTR exemption number you submit in the ship request prints on the international shipping label.<br><br>For CA export shipments,it can be Proof of report number(15-32 alphanumeric) ,Summary proof of report number(7-32 alphanumeric) or Exemption number(2 digit) based on the selected b13AFilingOption.<br>Example: 98765432107654321(POR number), 7654321(Summary POR number) and 02(Exemption number).<br>For FTR exemption number you need provide a predefined value as NO_EEI_30_37_A.
     * @param  ?PendingShipmentAccessDetail  $accessDetail  This information describes how and when a online email return label shipment may be accessed for completion.
     */
    public function __construct(
        public readonly ?array $completedPackageDetails = null,
        public readonly ?ShipmentOperationalDetail $operationalDetail = null,
        public readonly ?string $carrierCode = null,
        public readonly ?CompletedHoldAtLocationDetail $completedHoldAtLocationDetail = null,
        public readonly ?CompletedEtdDetail $completedEtdDetail = null,
        public readonly ?string $packagingDescription = null,
        public readonly ?TrackingId $masterTrackingId = null,
        public readonly ?ServiceDescription $serviceDescription = null,
        public readonly ?bool $usDomestic = null,
        public readonly ?CompletedHazardousShipmentDetail $hazardousShipmentDetail = null,
        public readonly ?ShipmentRating $shipmentRating = null,
        public readonly ?DocumentRequirementsDetail $documentRequirements = null,
        public readonly ?string $exportComplianceStatement = null,
        public readonly ?PendingShipmentAccessDetail $accessDetail = null,
    ) {
    }
}
