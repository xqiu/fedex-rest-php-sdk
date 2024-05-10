<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class Freight2020shipmentDetail extends Dto
{
    protected static array $attributeMap = ['aliasId' => 'aliasID'];

    protected static array $complexArrayTypes = [
        'lineItem' => [FreightShipmentLineItem::class],
        'specialServicePayments' => [FreightSpecialServicePayment::class],
        'printedReferences' => [PrintedReference::class],
    ];

    /**
     * @param  string  $role  Required<br>
     *                        Indicates the role of the party submitting the transaction.
     * @param  FreightShipmentLineItem[]  $lineItem  Details of the commodities in the shipment.
     * @param  LtlContactAndAddress  $fedExFreightBillingContactAndAddress  Specify the Billing Contact and Address details of the location for above FedEx Freight Account Number.
     * @param  int  $totalHandlingUnits  Total number of individual handling units in the entire shipment (for unit pricing). May not be negative.<br>Example: 12
     * @param  FreightSpecialServicePayment[]|null  $specialServicePayments  Indicates which party will pay surcharges for any special services which support split billing.
     * @param  ?LiabilityCoverageDetail  $liabilityCoverageDetail  This is used specify the line item level liability coverage.
     * @param  ?string  $fedExFreightAccountNumber  Conditional
     *
     *  FedEx Freight account number used with FEDEX_FREIGHT_ECONOMY or FEDEX_FREIGHT_PRIORITY  service; required for account-specific Freight rates.This is mandatory for all LTL Freight shipments except Bill To shipments. Note if the shipper is responsible for the transaportation charges, enter the SAME account number in the FedExFreightAccountNumber that is entered in the ShippingChargesPayment/Payor/ResponsibleParty/AccountNumber. If the shipper is not responsible for the transportation charges, enter a valid FedEx Freight Account Number.
     * @param  ?string  $declaredValueUnits  Indicates the Declared value units<br>Example: LBS
     * @param  PrintedReference[]|null  $printedReferences  Specifies the references to be printed on the invoice.
     * @param  ?PhoneNumber  $hazardousMaterialsEmergencyContactNumber  Indicate the phone number. Only numeric values allowed.
     * @param  ?float  $clientDiscountPercent  Conditional<br> This is only used for anonymous rate requests<br>Example: 5.12
     * @param  ?string[]  $coupons  Coupons<br>Example: [PROMO1, 10offtoday]
     * @param  ?string  $aliasId  Conditional<br>Indicates the LTL Account Alias identifier.<br>Example: 981234
     * @param  ?string  $collectTermsType  Indicates the terms of the collect payment for a Freight shipment.
     * @param  ?string  $hazardousMaterialsOfferor  Specifies the Hazardous materials offeror
     * @param  ?Money2  $declaredValuePerUnit  Specifies taxes or miscellaneous charge.
     * @param  ?mixed[]  $alternateBillingParty  The descriptive data for the alternateBilling party for the shipment and their physical location.'
     */
    public function __construct(
        public readonly string $role,
        public readonly array $lineItem,
        public readonly LtlContactAndAddress $fedExFreightBillingContactAndAddress,
        public readonly int $totalHandlingUnits,
        public readonly ?array $specialServicePayments = null,
        public readonly ?LiabilityCoverageDetail $liabilityCoverageDetail = null,
        public readonly ?string $fedExFreightAccountNumber = null,
        public readonly ?string $declaredValueUnits = null,
        public readonly ?array $printedReferences = null,
        public readonly ?PhoneNumber $hazardousMaterialsEmergencyContactNumber = null,
        public readonly ?float $clientDiscountPercent = null,
        public readonly ?array $coupons = null,
        public readonly ?string $aliasId = null,
        public readonly ?string $collectTermsType = null,
        public readonly ?string $hazardousMaterialsOfferor = null,
        public readonly ?Money2 $declaredValuePerUnit = null,
        public readonly ?array $alternateBillingParty = null,
    ) {
    }
}
