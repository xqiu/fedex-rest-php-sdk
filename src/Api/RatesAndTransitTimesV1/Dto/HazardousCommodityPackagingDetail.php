<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class HazardousCommodityPackagingDetail extends Dto
{
    /**
     * @param  ?int  $count  Indicate the number and type of packaging units for dangerous goods.
     * @param  ?string  $units  Specify the unit of the package.
     */
    public function __construct(
        public ?int $count = null,
        public ?string $units = null,
    ) {}
}
