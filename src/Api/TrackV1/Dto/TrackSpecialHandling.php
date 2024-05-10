<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class TrackSpecialHandling extends Dto
{
    /**
     * @param  ?string  $description  Field which holds the text description of the special handling code.<br> Example: Deliver Weekday
     * @param  ?string  $type  Field which holds type representing the special handling.<br> Example: DELIVER_WEEKDAY
     * @param  ?string  $paymentType  Field which holds information about the payment handling related to the special handling.<br> Example: OTHER
     */
    public function __construct(
        public readonly ?string $description = null,
        public readonly ?string $type = null,
        public readonly ?string $paymentType = null,
    ) {
    }
}
