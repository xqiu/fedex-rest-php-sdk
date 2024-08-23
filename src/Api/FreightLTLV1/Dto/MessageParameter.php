<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class MessageParameter extends Dto
{
    /**
     * @param  ?string  $id  Specifies the message parameter code.<br>Example: message ID
     * @param  ?string  $value  Specifies the message parameter value of the code.<br>Example: value
     */
    public function __construct(
        public ?string $id = null,
        public ?string $value = null,
    ) {}
}
