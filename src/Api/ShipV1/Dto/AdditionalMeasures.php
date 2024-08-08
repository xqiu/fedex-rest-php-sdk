<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class AdditionalMeasures extends Dto
{
    /**
     * @param  ?float  $quantity  Specify commodity quantity.
     * @param  ?string  $units  Unit of measure used to express the quantity of this commodity line item.
     */
    public function __construct(
        public readonly ?float $quantity = null,
        public readonly ?string $units = null,
    ) {
    }
}
