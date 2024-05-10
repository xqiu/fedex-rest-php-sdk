<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class OpenshipmentRequestedShipment extends Dto
{
    protected static array $complexArrayTypes = [
        'recipients' => [RecipientsParty::class],
        'requestedPackageLineItems' => [RequestedPackageLineItem::class],
    ];

    /**
     * @param  string  $pickupType  Indicate if shipment is being dropped off at a FedEx location or being picked up by FedEx or if it's a regular scheduled pickup for this shipment.<br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     * @param  string  $serviceType  Indicate the FedEx serviceType used for this shipment. The results will be filtered by the serviceType value indicated.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
     * @param  string  $packagingType  Specify the Packaging Type used with the shipment.<br>Note: For Express Freight shipments, the packaging will default to YOUR_PACKAGING irrespective of the user provided package type in the request.<br>Example: YOUR_PACKAGING<br><a onclick='loadDocReference("packagetypes")'>click here to see Package Types</a>
     * @param  mixed[]  $shipper  Specify the Shipper information. <br><i>Note: Shipper and Origin address should be same.</i>
     * @param  RecipientsParty[]  $recipients  Specify recipient information and/ the physical destination location for the package.
     * @param  Payment  $shippingChargesPayment  Specifies the payment details specifying the method and means of payment to FedEx for providing shipping services.
     * @param  RequestedPackageLineItem[]  $requestedPackageLineItems  These are one or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<ul><li>At least one instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.</li><li>Single piece requests will have one RequestedPackageLineItem.</li><li>Multiple piece requests will have multiple RequestedPackageLineItems.</li><li>Maximum occurrences is 30.</li></ul>
     * @param  ?string  $shipDatestamp  This is the shipment date. Default value is current date in case the date is not provided or a past date is provided.<br>Format [YYYY-MM-DD].<br>Example: 2019-10-14
     * @param  ?float  $totalWeight  shipment total weight should be in Kg or in Lbs <br><br>Example: 20.6.
     * @param  ?mixed[]  $soldTo  Will indicate the party responsible for purchasing the goods shipped from the shipper to the recipient. The sold to party is not necessarily the recipient or the importer of record. The sold to party is relevant when the purchaser, rather than the recipient determines when certain customs regulations apply.
     * @param  ?mixed[]  $origin  Specify the Shipment Origin address information, if different from shipper’s address.
     * @param  ?OpenShipmentSpecialServicesRequested  $shipmentSpecialServices  These special services are available at the shipment level for some or all service types.<br>If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object.
     * @param  ?EMailNotificationDetail  $emailNotificationDetail  This is used to provide eMail notification information.
     * @param  ?ExpressFreightDetail  $expressFreightDetail  Indicates the advance booking number, shipper load /count and packing list details. This details must be provided by the user during freight shipment.
     * @param  ?VariableHandlingChargeDetail  $variableHandlingChargeDetail  Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
     * @param  ?CustomsClearanceDetail  $customsClearanceDetail  These are customs clearance details. <br>Required for International and intra-country Shipments.
     * @param  ?SmartPostInfoDetail  $smartPostInfoDetail  Use this object to specify the smartpost shipment details. <br>Required for SMARTPOST service. If SmartPostInfoDetail is indicated, the elements below it are also required.
     * @param  ?bool  $blockInsightVisibility  Indicate if the shipment be available to be visible/tracked using FedEx InSight® tool. If value indicated as true, only the shipper/payer will have visibility of this shipment in the said tool.
     * @param  ?string[]  $rateRequestType  Indicate the type of rates to be returned. The account specific rates are returned by default if the account number is specified in the request.<br>Following are values:<ul><li>LIST - Returns FedEx published list rates in addition to account-specific rates (if applicable).</li><li>INCENTIVE - This is one-time discount for incentivising the customer. For more information, contact your FedEx representative.</li><li>ACCOUNT - Returns account specific rates (Default).</li><li>PREFERRED - Returns rates in the preferred currency specified in the element preferredCurrency.</li><li>RETAIL - Returns customer rate from one of retail FedEx service centers.</li></ul>Examples: ["ACCOUNT", "PREFERRED"]
     * @param  ?string  $preferredCurrency  Indicate the currency the caller requests to have used in all returned monetary values. Should be Used in conjunction with the element RateRequestType.<br>Example: USD<br><br><a onclick='loadDocReference("currencycodes")'>click here to see available Currency codes</a><br><br>Note: Incorrect currency codes should not be supplied. The system ignores the incorrect currency code.
     */
    public function __construct(
        public readonly string $pickupType,
        public readonly string $serviceType,
        public readonly string $packagingType,
        public readonly array $shipper,
        public readonly array $recipients,
        public readonly Payment $shippingChargesPayment,
        public readonly array $requestedPackageLineItems,
        public readonly ?string $shipDatestamp = null,
        public readonly ?float $totalWeight = null,
        public readonly ?array $soldTo = null,
        public readonly ?array $origin = null,
        public readonly ?OpenShipmentSpecialServicesRequested $shipmentSpecialServices = null,
        public readonly ?EMailNotificationDetail $emailNotificationDetail = null,
        public readonly ?ExpressFreightDetail $expressFreightDetail = null,
        public readonly ?VariableHandlingChargeDetail $variableHandlingChargeDetail = null,
        public readonly ?CustomsClearanceDetail $customsClearanceDetail = null,
        public readonly ?SmartPostInfoDetail $smartPostInfoDetail = null,
        public readonly ?bool $blockInsightVisibility = null,
        public readonly ?array $rateRequestType = null,
        public readonly ?string $preferredCurrency = null,
    ) {
    }
}
