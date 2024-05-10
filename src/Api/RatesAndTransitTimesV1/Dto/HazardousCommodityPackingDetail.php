<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class HazardousCommodityPackingDetail extends Dto
{
    /**
     * @param  ?string  $packingInstructions  Indicates the coded specification for how commodity is to be packed.
     * @param  ?bool  $cargoAircraftOnly  Indicates the shipment is packaged/documented for movement ONLY on cargo aircraft.
     */
    public function __construct(
        public readonly ?string $packingInstructions = null,
        public readonly ?bool $cargoAircraftOnly = null,
    ) {
    }
}
