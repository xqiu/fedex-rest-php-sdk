<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class TrackingNumbersResponse extends Dto
{
    protected static array $complexArrayTypes = [
        'completeTrackResults' => CompleteTrackResult::class,
        'alerts' => Alert::class,
    ];

    /**
     * @param  CompleteTrackResult[]|null  $completeTrackResults  Contains detailed tracking entry information. <br>Valid values are- ACTUAL_DELIVERY, ACTUAL_PICKUP, ACTUAL_TENDER, ANTICIPATED_TENDER, APPOINTMENT_DELIVERY, ATTEMPTED_DELIVERY, COMMITMENT, ESTIMATED_ARRIVAL_AT_GATEWAY, ESTIMATED_DELIVERY, ESTIMATED_PICKUP, ESTIMATED_RETURN_TO_STATION, SHIP, SHIPMENT_DATA_RECEIVED.
     * @param  Alert[]|null  $alerts  The cxs alert type, alert code and alert message<br>Example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     */
    public function __construct(
        public ?array $completeTrackResults = null,
        public ?array $alerts = null,
    ) {}
}
