<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class KeyDisplayTextVo extends Dto
{
    /**
     * @param  ?string  $displayText  Display Text
     * @param  ?string  $key  Unique Key
     */
    public function __construct(
        public ?string $displayText = null,
        public ?string $key = null,
    ) {}
}
