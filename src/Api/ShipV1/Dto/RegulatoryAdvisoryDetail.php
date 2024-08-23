<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class RegulatoryAdvisoryDetail extends Dto
{
    protected static array $complexArrayTypes = ['prohibitions' => RegulatoryProhibition::class];

    /**
     * @param  RegulatoryProhibition[]|null  $prohibitions  It is a regulatory probitions.
     */
    public function __construct(
        public ?array $prohibitions = null,
    ) {}
}
