<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto;

use ShipStream\FedEx\Dto;

final class ErrorsParameterList extends Dto
{
    /**
     * @param  ?string  $key  This is a parameter key.
     * @param  ?string  $value  This is a parameter value. Example: carrierCode
     */
    public function __construct(
        public readonly ?string $key = null,
        public readonly ?string $value = null,
    ) {
    }
}
