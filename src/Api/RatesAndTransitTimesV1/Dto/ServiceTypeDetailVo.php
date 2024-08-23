<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class ServiceTypeDetailVo extends Dto
{
    /**
     * @param  ?string  $carrierCode  Identifies which carrier is being described.
     * @param  ?string  $description  Description
     * @param  ?string  $serviceName  Service Name
     * @param  ?string  $serviceCategory  Service Category
     */
    public function __construct(
        public ?string $carrierCode = null,
        public ?string $description = null,
        public ?string $serviceName = null,
        public ?string $serviceCategory = null,
    ) {}
}
