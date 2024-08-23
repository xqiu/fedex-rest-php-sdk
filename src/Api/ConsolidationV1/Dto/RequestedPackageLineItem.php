<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class RequestedPackageLineItem extends Dto
{
    protected static array $complexArrayTypes = [
        'customerReferences' => CustomerReferences::class,
        'contentRecord' => ContentRecord::class,
        'associatedFreightLineItems' => AssociatedFreightLineItemDetail::class,
        'commodities' => Commodity::class,
    ];

    /**
     * @param  Weight  $weight  Indicate the shipment total weight in pounds.<br>Example: 10.6<br>Note: <ul><li>This only applies to International shipments and should be used on the first package of a multiple piece shipment.</li><li>This value contains 1 explicit decimal position.</li><li>For one Label at a time shipments, the unit of totalWeight is considered same as the unit of weight provided in requestedPackageLineItem field.</li></ul>
     * @param  ?int  $sequenceNumber  Optional. Used only with individual packages as a unique identifier of each requested package. Will be adjusted at the shipment level as pieces are added.
     * @param  ?string  $subPackagingType  This is a sub package type for the package. If the value is TUBE, a non-machinable surcharge will apply to SmartPost shipments<br><a href="/developer-portal/en-us/reference-guide.html#subpackagetypes" target="_blank">Click here to see Available Types</a>
     * @param  CustomerReferences[]|null  $customerReferences  This object lists the types of customer references associsted with the package along with the given values.
     * @param  ?Money2  $declaredValue  This is commodity value used for Customs declaration.
     * @param  ?Dimensions  $dimensions  Conditional.<br>The dimensions of the package; length, width & height. All three dimensions must be indicated.<br>Note: Dimensions are required with YOUR_PACKAGING package type.
     * @param  ?string  $physicalPackaging  Specification of handling-unit packaging for this commodity or class line.
     * @param  ?int  $groupPackageCount  This is a package count associated with Group packages This count cannot exceed Open Ship package count.
     * @param  ?string  $itemDescriptionForClearance  Package description used for clearance. The value is required for intra-UAE. and is optional for intra-EU.
     * @param  ContentRecord[]|null  $contentRecord  Specifies the contents of the package.
     * @param  ?string  $itemDescription  Required for Email Label return shipments.<br> This is the item description for the package.
     * @param  ?VariableHandlingChargeDetail  $variableHandlingChargeDetail  Specifies details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount.   If indicated, 'rateLevelType' is required.
     * @param  ?PackageSpecialServicesRequested  $packageSpecialServices  specifies the Package Special Services Requested
     * @param  AssociatedFreightLineItemDetail[]|null  $associatedFreightLineItems  Associated Freight Line Item Detail
     * @param  Commodity[]|null  $commodities  Details about the dutiable packages.
     */
    public function __construct(
        public Weight $weight,
        public ?int $sequenceNumber = null,
        public ?string $subPackagingType = null,
        public ?array $customerReferences = null,
        public ?Money2 $declaredValue = null,
        public ?Dimensions $dimensions = null,
        public ?string $physicalPackaging = null,
        public ?int $groupPackageCount = null,
        public ?string $itemDescriptionForClearance = null,
        public ?array $contentRecord = null,
        public ?string $itemDescription = null,
        public ?VariableHandlingChargeDetail $variableHandlingChargeDetail = null,
        public ?PackageSpecialServicesRequested $packageSpecialServices = null,
        public ?array $associatedFreightLineItems = null,
        public ?array $commodities = null,
    ) {}
}
