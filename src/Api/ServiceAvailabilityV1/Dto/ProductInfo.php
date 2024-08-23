<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class ProductInfo extends Dto
{
    /**
     * @param  ?bool  $customsValueAndWeightSpecifiedAsUnit  The total value declared to the Bureau of Customs and Border Protection for all packages in the shipment along with the weight details.
     * @param  ?int  $quantity  Quantity of the product in the package/shipment.
     * @param  ?float  $customsValue  Customs value of the product in the package/shipment.
     * @param  ?string  $weightUnitOfMeasureCode  Weight measurement unit code of the product in the package/shipment.
     * @param  ?string  $description  Description of the product in the package/shipment.
     * @param  ?Weight  $weight  Specify the total weight of the shipment. <br>This is only applies to International shipments and should be used on the first package of a multiple piece shipment. This value contains 1 explicit decimal position.
     * @param  ?bool  $sedRequired  Indicates if shippers export declaration is required or not.
     * @param  ?string  $productType  Indicates the package/shipment contains documents or non-document commodities.
     * @param  ?string  $unitOfMeasureCode  Specifies if shippers export declaration is required.<br>Valid values: True, False.
     * @param  ?string  $countryOfManufactureCode  Specify the country code of the product manufacturer.
     */
    public function __construct(
        public ?bool $customsValueAndWeightSpecifiedAsUnit = null,
        public ?int $quantity = null,
        public ?float $customsValue = null,
        public ?string $weightUnitOfMeasureCode = null,
        public ?string $description = null,
        public ?Weight $weight = null,
        public ?bool $sedRequired = null,
        public ?string $productType = null,
        public ?string $unitOfMeasureCode = null,
        public ?string $countryOfManufactureCode = null,
    ) {}
}
