<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class HazardousCommodityInnerReceptacleDetail extends Dto
{
    /**
     * @param  ?HazardousCommodityQuantityDetail  $quantity  Indicates the Hazardous Commodity Quantity Detail.
     */
    public function __construct(
        public ?HazardousCommodityQuantityDetail $quantity = null,
    ) {}
}
