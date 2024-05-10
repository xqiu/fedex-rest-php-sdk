<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class RequestedShipment extends Dto
{
    protected static array $complexArrayTypes = ['requestedPackageLineItems' => [RequestedPackageLineItem::class]];

    /**
     * @param  mixed[]  $shipper  The descriptive data for the physical shipper location from which the shipment originates.
     * @param  mixed[]  $recipient  Indicate the descriptive data for the recipient location to which the shipment is to be received.
     * @param  string  $pickupType  Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     * @param  RequestedPackageLineItem[]  $requestedPackageLineItems  These are one or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<ul><li>At least one instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.</li><li>Not used for FREIGHT.</li><li>Single piece requests will have one RequestedPackageLineItem.</li><li>Multiple piece requests will have multiple RequestedPackageLineItems.</li><li>Maximum occurrences is 99.</li></ul>
     * @param  ?string  $serviceType  Indicate the FedEx service type used for this shipment. The results will be filtered by the service type value indicated. If no serviceType is indicated then all the applicable services and corresponding rates will be returned.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     * @param  ?EMailNotificationDetail  $emailNotificationDetail  Object to specify email details for shipment notifications.
     * @param  ?string  $preferredCurrency  Indicate the currency the caller requests to have used in all returned monetary values (when a choice is possible). Used in conjunction with the rateRequestType data element. This element is used to pull Preferred rates.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'> Click here to see Currency Codes</a>
     * @param  ?string[]  $rateRequestType  Indicate the type of rates to be returned.<br>Following are values:<ul><li>LIST - Returns FedEx published list rates in addition to account-specific rates (if applicable).</li><li>PREFERRED - Returns rates in the preferred currency specified in the element preferredCurrency.</li><li>ACCOUNT - Returns account specific rates (Default).</li><li>INCENTIVE - This is one-time discount for incentivising the customer. For more information, contact your FedEx representative.</li></ul>Examples: ["LIST","PREFERRED"]
     * @param  ?string  $shipDateStamp  This is shipment date. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone.<br>Required Format is YYYY-MM-DD<br> Example: 2019-09-05
     * @param  ?bool  $documentShipment  Indicate whether or not its a document Shipment.
     * @param  ?mixed[]  $variableHandlingChargeDetail  contains the detail used to calculate a variable handling charge, a potentially non-fixed handling surcharge. Based on if there is a percent value, or a fixed amount, the charge can either be fixed or percents based.
     * @param  ?string  $packagingType  This is the Packaging type associated with this rate. For Ground/SmartPost,it  will always be YOUR_PACKAGING. For domestic Express, the packaging may have been bumped so it may not match the value specified on the request. For International Express the packaging may be bumped and not mapped.<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
     * @param  ?int  $totalPackageCount  Indicate the total number of packages in the shipment. <br>The Maximum number of packages in a rate request is 100.
     * @param  ?float  $totalWeight  Specify the total weight of the shipment. <br>This is only applies to International shipments and should be used on the first package of a multiple piece shipment. This value contains 1 explicit decimal position.
     * @param  ?mixed[]  $shipmentSpecialServices  Specify the special services requested at the shipment level.<br>This has to be specified if rate data needed for the special services.
     * @param  ?mixed[]  $customsClearanceDetail  This is Customs clearance data associated with the shipment. This is used for both international and intra-country shipping and rating. Customs commodity data is required for international and intra-country rating.
     * @param  ?bool  $groupShipment
     * @param  ?ServiceTypeDetailVo  $serviceTypeDetail  service type information details
     * @param  ?mixed[]  $smartPostInfoDetail  Indicate the FedEx Smartpost shipment details. Required for Smartpost shipments only.
     * @param  ?ExpressFreightDetail  $expressFreightDetail  Conditional"
     *                                                       Details specific to a FedEx Express Freight® shipment (i.e. FedEx First Freight, FedEx 1Day, 2Day, and 3Day Freight).
     * @param  ?bool  $groundShipment  If set to 'true', indicates it is a Ground shipment.<br> Example: 'false'
     */
    public function __construct(
        public readonly array $shipper,
        public readonly array $recipient,
        public readonly string $pickupType,
        public readonly array $requestedPackageLineItems,
        public readonly ?string $serviceType = null,
        public readonly ?EMailNotificationDetail $emailNotificationDetail = null,
        public readonly ?string $preferredCurrency = null,
        public readonly ?array $rateRequestType = null,
        public readonly ?string $shipDateStamp = null,
        public readonly ?bool $documentShipment = null,
        public readonly ?array $variableHandlingChargeDetail = null,
        public readonly ?string $packagingType = null,
        public readonly ?int $totalPackageCount = null,
        public readonly ?float $totalWeight = null,
        public readonly ?array $shipmentSpecialServices = null,
        public readonly ?array $customsClearanceDetail = null,
        public readonly ?bool $groupShipment = null,
        public readonly ?ServiceTypeDetailVo $serviceTypeDetail = null,
        public readonly ?array $smartPostInfoDetail = null,
        public readonly ?ExpressFreightDetail $expressFreightDetail = null,
        public readonly ?bool $groundShipment = null,
    ) {
    }
}
