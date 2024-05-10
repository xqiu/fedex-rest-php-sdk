<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class HazardousCommodityPackingDetail01 extends Dto
{
    /**
     * @param  bool  $cargoAircraftOnly  Shipment is packaged/documented for movement ONLY on cargo aircraft
     * @param  ?string  $packingInstructions  Coded specification for how commodity is to be packed.<br>Example: packing Instructions
     */
    public function __construct(
        public readonly bool $cargoAircraftOnly,
        public readonly ?string $packingInstructions = null,
    ) {
    }
}
