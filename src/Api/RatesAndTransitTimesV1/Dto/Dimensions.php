<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class Dimensions extends Dto
{
    /**
     * @param  ?int  $length  Indicate the length of the package. No implied decimal places. Maximum value: 999 <br> Example: 20
     * @param  ?int  $width  Indicate the width of the package. No implied decimal places. Maximum value: 999 <br> Example: 10
     * @param  ?int  $height  Indicate the height of the package. No implied decimal places. Maximum value: 999 <br> Example: 10
     * @param  ?string  $units  Indicate the unit of measure for the provided dimensions.<br>Valid Values are:<ul><li>IN - Inches</li><li>CM - Centimeters</li></ul>
     */
    public function __construct(
        public ?int $length = null,
        public ?int $width = null,
        public ?int $height = null,
        public ?string $units = null,
    ) {}
}
