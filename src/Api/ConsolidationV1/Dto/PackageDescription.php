<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageDescription extends Dto
{
    protected static array $complexArrayTypes = ['names' => ProductName::class];

    /**
     * @param  ?string  $packagingType  Specify the packaging used.<br>Note: For Express Freight shipments, the packaging will default to YOUR_PACKAGING irrespective of the user provided package type in the request.<br>Example: FEDEX_PAK<br><a onclick='loadDocReference("packagetypes")'>click here to see Package Types</a>
     * @param  ?string  $code  Specifies code of the Service.<br>example: 80
     * @param  ProductName[]|null  $names  Branded, translated, and/or localized names for this service.
     * @param  ?string  $astraDescription  Specifies astra description.<br>Example: SMART POST
     */
    public function __construct(
        public ?string $packagingType = null,
        public ?string $code = null,
        public ?array $names = null,
        public ?string $astraDescription = null,
        public ?string $description = null,
    ) {}
}
