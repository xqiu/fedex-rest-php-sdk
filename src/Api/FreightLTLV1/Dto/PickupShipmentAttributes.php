<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class PickupShipmentAttributes extends Dto
{
    /**
     * @param  ?string  $serviceType  The FedEx service type for the shipment.<br>Example: FEDEX_FREIGHT_PRIORITY
     * @param  ?WeightAvailability  $weight  These are the package weight details.
     * @param  ?string  $packagingType  The FedEx Packaging Type for the shipment.
     * @param  ?DimensionsAvailability  $dimensions  Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href=" https://www.fedex.com/en-us/service-guide.html# " target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     */
    public function __construct(
        public readonly ?string $serviceType = null,
        public readonly ?WeightAvailability $weight = null,
        public readonly ?string $packagingType = null,
        public readonly ?DimensionsAvailability $dimensions = null,
    ) {
    }
}
