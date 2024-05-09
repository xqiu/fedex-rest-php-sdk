<?php

declare(strict_types=1);

namespace ShipStream\FedEx\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class CommodityVo extends Dto
{
    protected static array $attributeMap = ['quantityUom' => 'quantityUOM'];

    /**
     * @param  string  $harmonizedCode  This is to specify the Harmonized Tariff System (HTS) code to meet U.S. and foreign governments' customs requirements. These are mainly used to estimate the duties and taxes.<br>Example: 0613<br>To research the classification for your commodity, use the FedEx Global Trade Manager online at <a href='http://www.fedex.com/gtm' target='_blank'>fedex.com/gtm</a>. You will find country-specific information to determine whether your commodity is considered to be a document or non-document for your destination.
     * @param  ?string  $quantity  Total number of units (using quantityUnits as the unit of measure) of this commodity present in the shipment.  <br>Example: '1'
     * @param  ?string  $quantityUom  This is the units quantity per commodity. This is used to estimate duties and taxes in GTC.<br>Example: 125
     * @param  ?mixed[]  $customsValue  Required<br>Customs value for this commodity
     * @param  ?string  $countryOfManufacture  Required<br> Max Length is 4<br> Example: IN
     * @param  ?string  $name  This represents the name of commodity.
     * @param  ?string  $description  This represents commodity description
     * @param  ?mixed[]  $weight  Represents Weight of the packages or shipment.
     * @param  ?int  $commodityId  This represents the commodity id
     * @param  ?Measure  $additionalMeasures  This object contains additional quantitative information other than weight and quantity to calculate duties and taxes.
     */
    public function __construct(
        public readonly string $harmonizedCode,
        public readonly ?string $quantity = null,
        public readonly ?string $quantityUom = null,
        public readonly ?array $customsValue = null,
        public readonly ?string $countryOfManufacture = null,
        public readonly ?string $name = null,
        public readonly ?string $description = null,
        public readonly ?array $weight = null,
        public readonly ?int $commodityId = null,
        public readonly ?Measure $additionalMeasures = null,
    ) {
    }
}
