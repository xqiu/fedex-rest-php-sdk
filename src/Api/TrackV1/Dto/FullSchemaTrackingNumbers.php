<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaTrackingNumbers extends Dto
{
    protected static array $complexArrayTypes = ['trackingInfo' => [TrackingInfo::class]];

    /**
     * @param  bool  $includeDetailedScans  Indicates if detailed scans are requested or not. <br/>Valid values are True, or False.
     * @param  TrackingInfo[]  $trackingInfo  The tracking information of the shipment to be tracked. At least one occurrence of TrackingInfo is required. Maximum limit is 30.
     */
    public function __construct(
        public readonly bool $includeDetailedScans,
        public readonly array $trackingInfo,
    ) {
    }
}
