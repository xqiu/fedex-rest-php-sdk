<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentRating extends Dto
{
    protected static array $complexArrayTypes = ['shipmentRateDetails' => ShipmentRateDetail::class];

    /**
     * @param  ?string  $actualRateType  This rate type identifies which entry in the following array is considered as presenting the "actual" rates for the shipment.
     * @param  ShipmentRateDetail[]|null  $shipmentRateDetails  Each element of this field provides shipment-level rate totals for a specific rate type.
     */
    public function __construct(
        public ?string $actualRateType = null,
        public ?array $shipmentRateDetails = null,
    ) {}
}
