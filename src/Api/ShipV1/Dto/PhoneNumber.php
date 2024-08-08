<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class PhoneNumber extends Dto
{
    /**
     * @param  ?string  $areaCode  Area-Code<br>Example: 901
     * @param  ?string  $localNumber  Local Number<br>Example: 3575012
     * @param  ?string  $extension  Extension<br>Example: 200
     * @param  ?string  $personalIdentificationNumber  Personal Identification Number<br>Example: 98712345
     */
    public function __construct(
        public readonly ?string $areaCode = null,
        public readonly ?string $localNumber = null,
        public readonly ?string $extension = null,
        public readonly ?string $personalIdentificationNumber = null,
    ) {
    }
}
