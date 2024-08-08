<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class HazardousCommodityQuantityDetail extends Dto
{
    /**
     * @param  ?string  $quantityType  Specifies type of a quantity unit.
     * @param  ?float  $amount  Specifies amount details.
     * @param  ?string  $units  Specify unit details.
     */
    public function __construct(
        public readonly ?string $quantityType = null,
        public readonly ?float $amount = null,
        public readonly ?string $units = null,
    ) {
    }
}
