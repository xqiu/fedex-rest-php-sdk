<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class TimeWindow extends Dto
{
    /**
     * @param  ?string  $description  Field which describes the time window provided. <br> Example: Description field
     * @param  ?TimeRange  $window  Field which holds a date/timestamp window.
     * @param  ?string  $type  Field which holds the code representing the description for the time window provided. <br> Example: ESTIMATED_DELIVERY
     */
    public function __construct(
        public readonly ?string $description = null,
        public readonly ?TimeRange $window = null,
        public readonly ?string $type = null,
    ) {
    }
}
