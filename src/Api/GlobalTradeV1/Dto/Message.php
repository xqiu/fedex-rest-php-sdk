<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class Message extends Dto
{
    protected static array $complexArrayTypes = ['parameters' => MessageParameter::class];

    /**
     * @param  ?string  $code  Specifies the advisory document related code.
     * @param  ?string  $text  Specifies names of the regulatory advisories.
     * @param  MessageParameter[]|null  $parameters  Specifies information related to the advisories and their relevant parameters.
     * @param  ?string  $localizedText  This provides the specifics of the regulations.
     */
    public function __construct(
        public ?string $code = null,
        public ?string $text = null,
        public ?array $parameters = null,
        public ?string $localizedText = null,
    ) {}
}
