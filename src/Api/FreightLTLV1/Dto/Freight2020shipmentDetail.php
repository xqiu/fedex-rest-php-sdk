<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class Freight2020shipmentDetail extends Dto
{
    protected static array $attributeMap = ['aliasId' => 'aliasID'];

    protected static array $complexArrayTypes = [
        'lineItem' => FreightShipmentLineItem2::class,
        'specialServicePayments' => FreightSpecialServicePayment::class,
        'printedReferences' => PrintedReference::class,
    ];

    /**
     * @param  string  $role  Required<br>
     *                        Indicates the role of the party submitting the transaction.
     * @param  FreightShipmentLineItem2[]  $lineItem  Required
     *
     * Class/weight pairs and associated details for a Freight shipment.
     * @param  LtlContactAndAddress  $fedExFreightBillingContactAndAddress  Specify the Billing Contact and Address details of the location for above FedEx Freight Account Number.
     * @param  int  $totalHandlingUnits  Total number of individual handling units in the entire shipment (for unit pricing). May not be negative.<br>Example: 12
     * @param  FreightSpecialServicePayment[]|null  $specialServicePayments  Indicates which party will pay surcharges for any special services which support split billing.
     * @param  ?LiabilityCoverageDetail  $liabilityCoverageDetail  This is used specify the line item level liability coverage.
     * @param  ?PartyAccountNumber  $fedExFreightAccountNumber  Specify the assigned FedEx Account Number. If the transportation charges to be billed to a payor other than the sender or recipient, provide the FedEx Account Number. Specify this field when payment type is selected as SENDER.
     * @param  ?string  $declaredValueUnits  Indicates the Declared value units<br>Example: LBS
     * @param  PrintedReference[]|null  $printedReferences  Specifies the references to be printed on the invoice.
     * @param  ?PhoneNumber  $hazardousMaterialsEmergencyContactNumber  Indicate the phone number. Only numeric values allowed.
     * @param  ?float  $clientDiscountPercent  Conditional<br> This is only used for anonymous rate requests<br>Example: 5.12
     * @param  ?string[]  $coupons  Coupons<br>Example: [PROMO1, 10offtoday]
     * @param  ?string  $aliasId  Conditional<br>Indicates the LTL Account Alias identifier.<br>Example: 981234
     * @param  ?string  $collectTermsType  Indicates the terms of the collect payment for a Freight shipment.
     * @param  ?string  $hazardousMaterialsOfferor  Specifies the Hazardous materials offeror
     * @param  ?Money  $declaredValuePerUnit  Specifies taxes or miscellaneous charge.
     * @param  ?Party2  $alternateBillingParty  Use this object to provide the attributes such as physical address, contact information and account number information.
     */
    public function __construct(
        public string $role,
        public array $lineItem,
        public LtlContactAndAddress $fedExFreightBillingContactAndAddress,
        public int $totalHandlingUnits,
        public ?array $specialServicePayments = null,
        public ?LiabilityCoverageDetail $liabilityCoverageDetail = null,
        public ?PartyAccountNumber $fedExFreightAccountNumber = null,
        public ?string $declaredValueUnits = null,
        public ?array $printedReferences = null,
        public ?PhoneNumber $hazardousMaterialsEmergencyContactNumber = null,
        public ?float $clientDiscountPercent = null,
        public ?array $coupons = null,
        public ?string $aliasId = null,
        public ?string $collectTermsType = null,
        public ?string $hazardousMaterialsOfferor = null,
        public ?Money $declaredValuePerUnit = null,
        public ?Party2 $alternateBillingParty = null,
    ) {}
}
