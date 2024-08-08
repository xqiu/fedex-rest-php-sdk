<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class RequestedShipmentVerify extends Dto
{
    protected static array $complexArrayTypes = [
        'recipients' => RecipientsParty::class,
        'requestedPackageLineItems' => RequestedPackageLineItem::class,
    ];

    /**
     * @param  string  $pickupType  Select if the shipment is to be dropped off at Fedex location or to be picked up by FedEx or if it is a scheduled pickup for this shipment.<br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     * @param  string  $serviceType  Indicate the FedEx service Type used for this shipment.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see available FedEx Service Types</a>
     * @param  string  $packagingType  Indicate the type of packaging used for the package.<br>Note: For Express Freight shipments, the packaging will default to value  YOUR_PACKAGING irrespective type provided in the request.<br>Example: FEDEX_ENVELOPE<br><a onclick='loadDocReference("packagetypes")'>click here to see Package Types</a>
     * @param  int  $totalWeight  shipment total weight should be in Kg or in Lbs
     * @param  ShipperParty  $shipper  Indicate the Shipper contact details for this shipment.
     * @param  RecipientsParty[]  $recipients  Indicate the shipment recipient details or the physical location details for the package destination.
     * @param  Payment  $shippingChargesPayment  Specifies the payment details specifying the method and means of payment to FedEx for providing shipping services.
     * @param  LabelSpecification  $labelSpecification  These are label specification details includes the image type, printer format, and label stock for label. Can also specify specific details such as doc-tab content, regulatory labels, and masking data on the label.
     * @param  RequestedPackageLineItem[]  $requestedPackageLineItems  Use this object to provide the package details.<br>Note: <ul><li>At least one instance containing the weight is required for EXPRESS and GROUND package.</li><li>Only Single piece requests are supported henceonly one line item should be provided.</li><li>Multiple piece shipment validation is not supported.</li></ul>
     * @param  ?string  $shipDatestamp  Indicate the shipment date.<br>Format: YYYY-MM-DD<br>Note: Default value is current date in case the date is not provided in the request.<br>Example: 2021-04-06
     * @param  ?ContactAndAddressVerify  $origin  Specifies the contact and address details of a location.
     * @param  ?RequestedShipmentVerifyShipmentSpecialServices  $shipmentSpecialServices  Indicate the shipment special service or handling required for this shipment. <br>Note: <ul><li>If the shipper is requesting a special service, the special service type must be indicated in the object specialServiceTypes, and all supporting detail must be provided in the appropriate sub-object below.</li><li>For returns it is required to provide value RETURN_SHIPMENT in the specialServiceTypes.</li></ul>
     * @param  ?EMailNotificationDetail  $emailNotificationDetail  These are email disposition details. Provides the type and email addresses of e-mail recipients. If returnedDispositionDetail in labelSpecification is set as true then email will be send with label and documents copy.
     * @param  ?VariableHandlingChargeDetail  $variableHandlingChargeDetail  Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
     * @param  ?CustomsClearanceDetail  $customsClearanceDetail  These are customs clearance details. Required for International and intra-country Shipments.
     * @param  ?SmartPostInfoDetail  $smartPostInfoDetail  Use this object to specify the smartpost shipment details. <br>Required for SMARTPOST service. If SmartPostInfoDetail is indicated, the elements below it are also required.
     * @param  ?bool  $blockInsightVisibility  Indicate if the shipment be available to be visible/tracked using FedEx InSight® tool. If value indicated as true, only the shipper/payer will have visibility of this shipment in the said tool.
     * @param  ?ShippingDocumentSpecification  $shippingDocumentSpecification  Use this object to provide all data required for additional (non-label) shipping documents to be produced.
     * @param  ?string[]  $rateRequestType  Indicate the type of rates to be returned.<br>Following are values:<ul><li>LIST - Returns published list rates will be returned in addition to account-specific rate (if applicable).</li><li>PREFERRED - It returns rates in currency as specified in the PreferredCurrency element.</li><li>ACCOUNT - Returns account specific rates. Note: The account specific rates are returned by default if the shipper account number is specified in the shipment.</li><li>INCENTIVE - This is one-time discount for incentivizing the customer.</li></ul>Examples: ["ACCOUNT", "PREFERRED"]
     * @param  ?string  $preferredCurrency  Indicate the currency the caller requests to have used in all returned monetary values. Should be Used in conjunction with the element RateRequestType.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see available Currency codes</a><br>Note: Incorrect currency codes should not be supplied. The system ignores the incorrect currency code.
     */
    public function __construct(
        public readonly string $pickupType,
        public readonly string $serviceType,
        public readonly string $packagingType,
        public readonly int $totalWeight,
        public readonly ShipperParty $shipper,
        public readonly array $recipients,
        public readonly Payment $shippingChargesPayment,
        public readonly LabelSpecification $labelSpecification,
        public readonly array $requestedPackageLineItems,
        public readonly ?string $shipDatestamp = null,
        public readonly ?ContactAndAddressVerify $origin = null,
        public readonly ?RequestedShipmentVerifyShipmentSpecialServices $shipmentSpecialServices = null,
        public readonly ?EMailNotificationDetail $emailNotificationDetail = null,
        public readonly ?VariableHandlingChargeDetail $variableHandlingChargeDetail = null,
        public readonly ?CustomsClearanceDetail $customsClearanceDetail = null,
        public readonly ?SmartPostInfoDetail $smartPostInfoDetail = null,
        public readonly ?bool $blockInsightVisibility = null,
        public readonly ?ShippingDocumentSpecification $shippingDocumentSpecification = null,
        public readonly ?array $rateRequestType = null,
        public readonly ?string $preferredCurrency = null,
    ) {
    }
}
