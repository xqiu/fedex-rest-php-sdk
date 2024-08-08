<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class TrackingNumbersResponseTcn extends Dto
{
    protected static array $complexArrayTypes = [
        'completeTrackResults' => CompleteTrackResult::class,
        'alerts' => Alert::class,
    ];

    /**
     * @param  CompleteTrackResult[]|null  $completeTrackResults  Contains detailed tracking entry information.
     * @param  Alert[]|null  $alerts  alert type, alert code, and alert message<br>Example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     */
    public function __construct(
        public readonly ?array $completeTrackResults = null,
        public readonly ?array $alerts = null,
    ) {
    }
}
