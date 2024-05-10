<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class HazardousCommodityPackingDetail01 extends Dto
{
    /**
     * @param  bool  $cargoAircraftOnly  A Boolean value that, when True, specifies the mode of shipment transportation should be Cargo Aircraft for Dangerous Goods. <br>Note: An identifier DGD-CAO is added in AWB for cargo aircraft shipments.
     * @param  ?string  $packingInstructions  Coded specification for how commodity is to be packed.<br>Example: packing Instructions
     */
    public function __construct(
        public readonly bool $cargoAircraftOnly,
        public readonly ?string $packingInstructions = null,
    ) {
    }
}
