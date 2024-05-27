<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentRateDetail2 extends Dto
{
    protected static array $complexArrayTypes = [
        'taxes' => [Tax::class],
        'surcharges' => [Surcharge::class],
        'freightDiscounts' => [RateDiscount::class],
    ];

    /**
     * @param  ?string  $rateZone  Indicates the rate zone used (based on origin and destination).<br>Example: US001O
     * @param  ?string  $ratedWeightMethod  Indicates which weight was used.<br>Example: ACTUAL
     * @param  ?float  $totalDutiesTaxesAndFees  The total of the total duties & taxes and the total ancillary fees & taxes.<br>Example: 24.56
     * @param  ?string  $pricingCode  Specifies pricing Code.<br>Example: PACKAGE
     * @param  ?float  $totalFreightDiscounts  The total discounts used in the rate calculation.<br>Example: 1.56
     * @param  ?float  $totalTaxes  Total of the transportation-based taxes.<br>Example: 3.45
     * @param  ?float  $totalDutiesAndTaxes  Total of all values under this shipment's duties and taxes; only provided if estimated duties and taxes were calculated for this shipment.<br>Example: 6.78
     * @param  ?float  $totalAncillaryFeesAndTaxes  Identifies the total amount of the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.<br>Example: 5.67
     * @param  Tax[]|null  $taxes  Specifies the list of taxes.
     * @param  ?float  $totalRebates  The total sum of all rebates applied to this shipment.<br>Example: 1.98
     * @param  ?float  $fuelSurchargePercent  Specifies a fuel surcharge percentage.<br>Example: 4.56
     * @param  ?CurrencyExchangeRate  $currencyExchangeRate  Specifies the currency exchange performed on financial amounts on this rate.
     * @param  ?float  $totalNetFreight  The freight charge minus discounts.<br>Example: 9.56
     * @param  ?float  $totalNetFedExCharge  This is the sum of shipment's total net freight, total surchages (not including totalTaxes).<br>Example: 88.56
     * @param  mixed[][]|null  $shipmentLegRateDetails  This is data for a single leg of a shipment's total/summary rates, as calculated per a specific rate type.
     * @param  ?int  $dimDivisor  The value used to calculate the weight based on the dimensions.<br>Example: 0
     * @param  ?string  $rateType  The Type used for this specific set of rate data.<br>Example: RATED_ACCOUNT_SHIPMENT
     * @param  Surcharge[]|null  $surcharges  Specifies the list of all surcharges that apply to this package.
     * @param  ?float  $totalSurcharges  The total amount of all surcharges applied to this shipment.<br>Example: 9.88
     * @param  ?Weight  $totalBillingWeight  These are the package weight details.<br>Note: Weight is not required for One rate shipments
     * @param  RateDiscount[]|null  $freightDiscounts  All rate discounts that apply to this shipment.<br><a onclick='loadDocReference("discounts")'>Click here to see Discounts</a>
     * @param  ?string  $rateScale  Indicates the rate scale used.<br>Example: 00000
     * @param  ?float  $totalNetCharge  The net charge after applying all discounts and surcharges.<br>Example: 3.78
     * @param  ?float  $totalBaseCharge  The total Shipment charge that was calculated before surcharges, discounts and taxes.<br>Example: 234.56
     * @param  ?float  $totalNetChargeWithDutiesAndTaxes  This is the sum of shipment's total net charges and total duties and taxes; only provided if estimated duties and taxes were calculated for this shipment AND duties, taxes and transportation charges are all paid by the same sender account.<br>Example: 222.56
     * @param  ?string  $currency  Indicates the currency code.<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency Codes</a>
     */
    public function __construct(
        public readonly ?string $rateZone = null,
        public readonly ?string $ratedWeightMethod = null,
        public readonly ?float $totalDutiesTaxesAndFees = null,
        public readonly ?string $pricingCode = null,
        public readonly ?float $totalFreightDiscounts = null,
        public readonly ?float $totalTaxes = null,
        public readonly ?float $totalDutiesAndTaxes = null,
        public readonly ?float $totalAncillaryFeesAndTaxes = null,
        public readonly ?array $taxes = null,
        public readonly ?float $totalRebates = null,
        public readonly ?float $fuelSurchargePercent = null,
        public readonly ?CurrencyExchangeRate $currencyExchangeRate = null,
        public readonly ?float $totalNetFreight = null,
        public readonly ?float $totalNetFedExCharge = null,
        public readonly ?array $shipmentLegRateDetails = null,
        public readonly ?int $dimDivisor = null,
        public readonly ?string $rateType = null,
        public readonly ?array $surcharges = null,
        public readonly ?float $totalSurcharges = null,
        public readonly ?Weight $totalBillingWeight = null,
        public readonly ?array $freightDiscounts = null,
        public readonly ?string $rateScale = null,
        public readonly ?float $totalNetCharge = null,
        public readonly ?float $totalBaseCharge = null,
        public readonly ?float $totalNetChargeWithDutiesAndTaxes = null,
        public readonly ?string $currency = null,
    ) {
    }
}
