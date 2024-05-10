<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class ReasonDetail extends Dto
{
    /**
     * @param  ?string  $description  Field which holds the reason description. <br> Example: Wrong color
     * @param  ?string  $type  Field which holds the reason type.<br> Example: REJECTED
     */
    public function __construct(
        public readonly ?string $description = null,
        public readonly ?string $type = null,
    ) {
    }
}
