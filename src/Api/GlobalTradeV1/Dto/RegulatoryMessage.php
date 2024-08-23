<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class RegulatoryMessage extends Dto
{
    protected static array $complexArrayTypes = ['messageParameters' => MessageParameters::class];

    /**
     * @param  ?string  $code  Indicates the message code.
     * @param  MessageParameters[]|null  $messageParameters  Value indicating the translated text.
     * @param  ?int  $index  Non negative integer value indicating the index of the commodity description.
     * @param  ?string  $text  Indicates the content of the user-instructional message in English.
     * @param  ?string  $localizedText  This is the return message from the service provider in local language.
     */
    public function __construct(
        public ?string $code = null,
        public ?array $messageParameters = null,
        public ?int $index = null,
        public ?string $text = null,
        public ?string $localizedText = null,
    ) {}
}
