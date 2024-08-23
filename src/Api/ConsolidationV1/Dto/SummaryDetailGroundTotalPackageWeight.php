<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class SummaryDetailGroundTotalPackageWeight extends Dto
{
    /**
     * @param  ?string  $units  Weight unit
     * @param  ?int  $value  Weight amount
     */
    public function __construct(
        public ?string $units = null,
        public ?int $value = null,
    ) {}
}
