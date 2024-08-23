<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class RequestedPackageLineItem extends Dto
{
    protected static array $complexArrayTypes = [
        'customerReferences' => CustomerReference::class,
        'contentRecord' => ContentRecord::class,
    ];

    /**
     * @param  Weight  $weight  These are the package weight details.<br>Note: Weight is not required for One rate shipments
     * @param  ?int  $sequenceNumber  Optional. Used only with individual packages as a unique identifier of each requested package. Will be adjusted at the shipment level as pieces are added.<br>Example: 1
     * @param  ?string  $subPackagingType  Indicate the subPackagingType, if you are using your own packaging for the shipment. Use it for all shipments inbound to Canada (CA) and inbound shipments to the U.S. and Puerto Rico (PR) from Canada and Mexico (MX).subPackagingType is mandatory for shipments to Canada.<br>Example: TUBE, CARTON, CONTAINER. etc.<br>Note: If the value is TUBE, a non-machinable surcharge will be applicable for SmartPost shipments.<br><a onclick='loadDocReference("subpackagetypes")'>click here to see Sub-Packaging Types</a><br>For more information on physical packaging or packaging regulatory requirements, contact your FedEx representative.
     * @param  CustomerReference[]|null  $customerReferences  This object lists the customer references provided with the package.
     * @param  ?Money  $declaredValue  This customs value is applicable for all items(or units) under the specified commodity
     * @param  ?Dimensions  $dimensions  Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     * @param  ?int  $groupPackageCount  Indicate the grouped package count. These are number of identical package(s) each with one or more commodities. <br> Example: 2
     * @param  ?string  $itemDescriptionForClearance  Package description used for clearance. The value is required for intra-UAE. and is optional for intra-EU.<br>Example:description
     * @param  ContentRecord[]|null  $contentRecord  Use this object to specify package content details.
     * @param  ?string  $itemDescription  This the item description for the package.<br>Note: Item description is required for Email Label return shipments and ground Create tag.<br>Example: Item description<br> Maximum limit is 50 characters
     * @param  ?VariableHandlingChargeDetail  $variableHandlingChargeDetail  Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
     * @param  ?PackageSpecialServicesRequested  $packageSpecialServices  These are special services that are available at the package level for some or all service types.
     */
    public function __construct(
        public Weight $weight,
        public ?int $sequenceNumber = null,
        public ?string $subPackagingType = null,
        public ?array $customerReferences = null,
        public ?Money $declaredValue = null,
        public ?Dimensions $dimensions = null,
        public ?int $groupPackageCount = null,
        public ?string $itemDescriptionForClearance = null,
        public ?array $contentRecord = null,
        public ?string $itemDescription = null,
        public ?VariableHandlingChargeDetail $variableHandlingChargeDetail = null,
        public ?PackageSpecialServicesRequested $packageSpecialServices = null,
    ) {}
}
