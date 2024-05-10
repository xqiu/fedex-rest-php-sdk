<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class RequestedAppointmentDetail extends Dto
{
    protected static array $complexArrayTypes = ['window' => [TimeWindow::class]];

    /**
     * @param  ?string  $date  Field which holds the requested appointment date.<br>Format: YYYY-MM-DD<br> example: '2019-05-07'
     * @param  TimeWindow[]|null  $window  Array of different appointment time windows available on the date specified such as, Morning, afternoon, mid-day.
     */
    public function __construct(
        public readonly ?string $date = null,
        public readonly ?array $window = null,
    ) {
    }
}
