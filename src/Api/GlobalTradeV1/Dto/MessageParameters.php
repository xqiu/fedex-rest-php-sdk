<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class MessageParameters extends Dto
{
    /**
     * @param  ?string  $id  Indicates the message identifier.
     * @param  ?string  $value  Indicates the message.
     */
    public function __construct(
        public readonly ?string $id = null,
        public readonly ?string $value = null,
    ) {
    }
}
