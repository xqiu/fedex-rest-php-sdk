<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class HazardousCommodityContent extends Dto
{
    protected static array $complexArrayTypes = ['innerReceptacles' => [HazardousCommodityInnerReceptacleDetail::class]];

    /**
     * @param  ?HazardousCommodityQuantityDetail  $quantity  Indicates the Hazardous Commodity Quantity Detail.
     * @param  HazardousCommodityInnerReceptacleDetail[]|null  $innerReceptacles  Specifies the inner receptacles within the container.
     * @param  ?HazardousCommodityOptionDetail  $options  Indicates details of hazardous commodity option detail.
     * @param  ?HazardousCommodityDescription  $description  Required<br>Details of hazardous commodity description.
     */
    public function __construct(
        public readonly ?HazardousCommodityQuantityDetail $quantity = null,
        public readonly ?array $innerReceptacles = null,
        public readonly ?HazardousCommodityOptionDetail $options = null,
        public readonly ?HazardousCommodityDescription $description = null,
    ) {
    }
}
