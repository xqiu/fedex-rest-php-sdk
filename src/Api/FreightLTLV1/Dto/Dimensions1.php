<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class Dimensions1 extends Dto
{
    /**
     * @param  ?int  $length  Indicate the length of the package. No implied decimal places. Maximum value: 999 <br> Example: 20
     * @param  ?int  $width  Indicate the width of the package. No implied decimal places. Maximum value: 999 <br> Example: 10
     * @param  ?int  $height  Indicate the height of the package. No implied decimal places. Maximum value: 999 <br> Example: 10
     * @param  ?string  $units  Indicate the unit of measure for the provided dimensions.<br>Valid Values are:<ul><li>IN - Inches</li><li>CM - Centimeters</li></ul>
     */
    public function __construct(
        public readonly ?int $length = null,
        public readonly ?int $width = null,
        public readonly ?int $height = null,
        public readonly ?string $units = null,
    ) {
    }
}
