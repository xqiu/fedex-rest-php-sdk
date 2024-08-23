<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\AddressValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class ResolutionToken extends Dto
{
    /**
     * @param  ?bool  $changed  Indicates if it has changed from the input address.
     * @param  ?string  $value  Indicates the changed value.<br> Example: SAN JUAN
     */
    public function __construct(
        public ?bool $changed = null,
        public ?string $value = null,
    ) {}
}
