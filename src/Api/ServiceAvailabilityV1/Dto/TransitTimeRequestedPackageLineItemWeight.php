<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class TransitTimeRequestedPackageLineItemWeight extends Dto
{
    /**
     * @param  string  $units  Specify the unit of measurement used to weigh. <br> Example: LB
     * @param  float  $value  Weight Value.<br> Example: 68.25<br><a href='https://developer.fedex.com/api/en-us/guides/api-reference.html#packagetypes' target='_blank'>Click here to see Weight Values</a>
     */
    public function __construct(
        public string $units,
        public float $value,
    ) {}
}
