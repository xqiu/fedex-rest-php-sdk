<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class Localization extends Dto
{
    /**
     * @param  ?string  $localization  Two letter language code. <br> Example: EN<br><a onclick='loadDocReference("locales")'>click here to see Locales</a>
     * @param  ?string  $localeCode  Two letter region code. <br> Example: us<br><a onclick='loadDocReference("locales")'>click here to see Locales</a>
     */
    public function __construct(
        public ?string $localization = null,
        public ?string $localeCode = null,
    ) {}
}
