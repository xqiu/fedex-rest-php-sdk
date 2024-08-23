<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitDays extends Dto
{
    /**
     * @param  ?string  $description  Specifies the number of days the package/shipment is to be in transit. <br> Example: 2 Business Days
     * @param  ?string  $minimumTransitTime  Code indicating the number of transit days.<br> Example: TW0_DAYS
     */
    public function __construct(
        public ?string $description = null,
        public ?string $minimumTransitTime = null,
        public ?string $maximumTransitTime = null,
    ) {}
}
