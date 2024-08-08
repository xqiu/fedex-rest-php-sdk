<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class BinaryBarcode extends Dto
{
    /**
     * @param  ?string  $type  The kind of barcode data in this instance.<br> Example: COMMON-2D
     * @param  ?string  $value  This is the value.
     */
    public function __construct(
        public readonly ?string $type = null,
        public readonly ?string $value = null,
    ) {
    }
}
