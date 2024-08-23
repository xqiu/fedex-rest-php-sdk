<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1\Dto;

use ShipStream\FedEx\Dto;

final class LocationSummaryOutputVo extends Dto
{
    protected static array $complexArrayTypes = [
        'alerts' => Alert::class,
        'ambiguousAddress' => LocationDetail::class,
        'locationCapabilities' => LocationCapabilities::class,
        'packageMaximumLimits' => PackageAttribute::class,
    ];

    /**
     * @param  ?int  $totalResults  Indicates the total number of locations that are displayed in the result.<br>Example: 13
     * @param  ?int  $resultsReturned  Specifies the number of results returned in the reply.<br>Example: 10
     * @param  ?Address  $matchedAddress  Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of \"address parts\" which should be handled as a unit (such as a city-state-ZIP combination within the US).
     * @param  ?GeoPositionalCoordinates  $matchedAddressGeoCoord  The ISO6709GeographicCoordinates for a specific geographic location
     * @param  mixed[][]|null  $locationDetailList  List of FedEx locations meeting the search criteria.
     * @param  Alert[]|null  $alerts  Specifies the alerts.
     * @param  ?LocationDetail  $nearestLocation  Details about a specific FedEx location such as services offered, distance, package attributes supported, hours, pickup and drop off times.
     * @param  ?LocationDetail  $latestLocation  Details about a specific FedEx location such as services offered, distance, package attributes supported, hours, pickup and drop off times.
     * @param  LocationDetail[]|null  $ambiguousAddress  Indicates the values for ambiguous address details.
     * @param  ?bool  $ambiguousLocationsReturned  Indicates whether value for ambigous locations were returned or not. <br>Valid values: True, False.
     * @param  ?bool  $nearestLocationReturned  Indicates whether value for nearest locations were returned or not. <br>Valid values: True, False.
     * @param  ?bool  $latestLocationReturned  Indicates whether value for latest locations were returned or not. <br>Valid values: True, False.
     * @param  ?int  $lockerAvailabilityCode  Code for locker availability
     * @param  ?string  $lockerAvailabilityMessage  Message for locker availability
     * @param  ?string  $phoneNumber  Specify the phone number If the locationSearchCriterion is set to 'PHONE_NUMBER'.The mobile numbers will not return results when set as a criterion. <br> Example: 9015551234
     * @param  ?string  $multipleMatchesAction  Specify the criterion to be used to return location results when there are multiple matches.<br><br><i>Note: The 'maxResults' value takes precedence over RETURN_ALL value.</i>
     * @param  ?Sort  $sort  Specifies how the location search results will be sorted in the reply.
     * @param  ?TrackingInfo  $trackingInfo  Information uniquely identifying a shipment such as Tracking number, ShipDate, and Tracking number uniqueId. This tracking information helps to return the correct list of locations when REDIRECT_TO_HOLD_AT_LOCATION is requested
     * @param  ?bool  $sameState  Filter to display locations within the same state as the search criteria.<br>Valid values: True, False.
     * @param  ?bool  $sameCountry  Filter to display locations within the same country as the search criteria.<br>Valid values: True, False.
     * @param  ?string  $redirectToHoldType  Specify the type of service supported by a FedEx location for redirect to hold.<br>Valid values: FEDEX_EXPRESS, FEDEX_GROUND, FEDEX_GROUND_HOME_DELIVERY.
     * @param  ?string[]  $locationAttrTypes  Indicates the attributes for the location.
     * @param  LocationCapabilities[]|null  $locationCapabilities  Specify to filter the locations based on their capabilities.
     * @param  PackageAttribute[]|null  $packageMaximumLimits  Any required location supported package constraints to narrow the search.<br>For example, a package weighing more than 151 pounds may not be supported at all location types.  Drop box location would be excluded.
     * @param  ?string[]  $locationTypes  Results filter which narrows the search to specific types of FedEx Locations.
     * @param  ?bool  $includeHoliday  Indicates true if the location holiday list is desired in the results; otherwise false <br>Valid values: True, False.
     * @param  ?string  $dropoffTime  Specifies the latest time by which you can drop-off a package at a location to process the shipment the same day. This limits the results to locations that support a specific drop-off time. The format is an ISO 8601 string in which only the time portion is used.<br>Example: 16:00:00
     * @param  ?string  $dropOffServiceType  The drop-off service types supported by the specified location.<br>Example: FedEx Ground.
     * @param  ?string  $searchBy  location search based on searchBy
     * @param  ?string  $contentOptions  location content options
     * @param  ?string[]  $carrierCodes  Unique code to identify the transporter.
     * @param  ?bool  $getCall  Get a call. Valid values: True, False.
     */
    public function __construct(
        public ?int $totalResults = null,
        public ?int $resultsReturned = null,
        public ?Address $matchedAddress = null,
        public ?GeoPositionalCoordinates $matchedAddressGeoCoord = null,
        public ?array $locationDetailList = null,
        public ?array $alerts = null,
        public ?LocationDetail $nearestLocation = null,
        public ?LocationDetail $latestLocation = null,
        public ?array $ambiguousAddress = null,
        public ?bool $ambiguousLocationsReturned = null,
        public ?bool $nearestLocationReturned = null,
        public ?bool $latestLocationReturned = null,
        public ?int $lockerAvailabilityCode = null,
        public ?string $lockerAvailabilityMessage = null,
        public ?Location $location = null,
        public ?string $phoneNumber = null,
        public ?string $multipleMatchesAction = null,
        public ?Sort $sort = null,
        public ?TrackingInfo $trackingInfo = null,
        public ?bool $sameState = null,
        public ?bool $sameCountry = null,
        public ?string $redirectToHoldType = null,
        public ?array $locationAttrTypes = null,
        public ?array $locationCapabilities = null,
        public ?array $packageMaximumLimits = null,
        public ?array $locationTypes = null,
        public ?bool $includeHoliday = null,
        public ?string $dropoffTime = null,
        public ?string $dropOffServiceType = null,
        public ?string $searchBy = null,
        public ?string $contentOptions = null,
        public ?array $carrierCodes = null,
        public ?bool $getCall = null,
    ) {}
}
