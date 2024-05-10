<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class TrackingInfo extends Dto
{
    /**
     * @param  TrackingNumberInfo  $trackingNumberInfo  Information uniquely identifying a shipment such as Tracking number, ShipDate, and Tracking number uniqueId.
     * @param  ?string  $shipDateBegin  ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD<br> Example: 2020-03-29
     * @param  ?string  $shipDateEnd  ShipDateBegin and ShipDateEnd are recommended to narrow the search, reduce lookup time, and avoid duplicates when searching for a specific tracking number within a specific date range. <br>Format: YYYY-MM-DD<br> Example: 2020-04-01
     */
    public function __construct(
        public readonly TrackingNumberInfo $trackingNumberInfo,
        public readonly ?string $shipDateBegin = null,
        public readonly ?string $shipDateEnd = null,
    ) {
    }
}
