<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ValidatedHazardousContainer extends Dto
{
    protected static array $complexArrayTypes = ['hazardousCommodities' => [ValidatedHazardousCommodityContent::class]];

    /**
     * @param  ?float  $qvalue  Indicates that the quantity of the dangerous goods packaged is permissible for shipping. This is used to ensure that the dangerous goods commodities do not exceed the net quantity per package restrictions.<br>Example: 2.0
     * @param  ValidatedHazardousCommodityContent[]|null  $hazardousCommodities  Indicates the details of the hazardous commodities in the completed package.
     */
    public function __construct(
        public readonly ?float $qvalue = null,
        public readonly ?array $hazardousCommodities = null,
    ) {
    }
}
