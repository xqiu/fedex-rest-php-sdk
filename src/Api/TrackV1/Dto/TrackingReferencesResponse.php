<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class TrackingReferencesResponse extends Dto
{
    protected static array $complexArrayTypes = [
        'cxsErrors' => CxsError::class,
        'completeTrackResults' => CompleteTrackResult::class,
        'alerts' => Alert::class,
    ];

    /**
     * @param  CxsError[]|null  $cxsErrors  Indicates error alert when suspicious files, potential exploits and viruses found while scanning files , directories and user accounts. This includes code, message and parameter.
     * @param  CompleteTrackResult[]|null  $completeTrackResults  Contains detailed tracking entry information.  <br>Valid values: ACTUAL_DELIVERY, ACTUAL_PICKKUP, ACTUAL_TENDER, ANTICIPATED_TENDER, APPOINTMENT_DELIVERY, ATTEMPTED_DELIVERY, COMMITMENT, ESTIMATED_ARRIVAL_AT_GATEWAY, ESTIMATED_DELIVERY, ESTIMATED_PICKUP, ESTIMATED_RETURN_TO_STATION, SHIP, SHIPMENT_DATE_RECEIVED
     * @param  Alert[]|null  $alerts  The cxs alert type, alert code, and alert message that is received.<br>example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     * @param  ?bool  $successful  Indicates whether the tracking is successful.
     */
    public function __construct(
        public readonly ?array $cxsErrors = null,
        public readonly ?array $completeTrackResults = null,
        public readonly ?array $alerts = null,
        public readonly ?bool $successful = null,
    ) {
    }
}
