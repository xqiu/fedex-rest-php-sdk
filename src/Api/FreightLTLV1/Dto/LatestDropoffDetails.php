<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class LatestDropoffDetails extends Dto
{
    /**
     * @param  ?string  $dayOfWeek  The days of the week for which this capability applies.
     * @param  ?Overlay  $operationalOverlay  Specifies the overlay.
     * @param  ?string  $exceptionalTime  Specifies the exceptional time.
     * @param  ?Overlay  $exceptionalOverlay  Specifies the overlay.
     * @param  ?string  $operationTime  Specifies the operation time.
     */
    public function __construct(
        public readonly ?string $dayOfWeek = null,
        public readonly ?Overlay $operationalOverlay = null,
        public readonly ?string $exceptionalTime = null,
        public readonly ?Overlay $exceptionalOverlay = null,
        public readonly ?string $operationTime = null,
    ) {
    }
}
