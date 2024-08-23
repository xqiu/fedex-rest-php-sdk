<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\AddressValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class Parameter extends Dto
{
    /**
     * @param  ?string  $value  Identifies the error option to be applied.
     * @param  ?string  $key  Indicates the value associated with the key.
     */
    public function __construct(
        public ?string $value = null,
        public ?string $key = null,
    ) {}
}
