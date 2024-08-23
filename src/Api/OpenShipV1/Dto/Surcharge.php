<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class Surcharge extends Dto
{
    /**
     * @param  ?string  $amount  This is the surcharge amount.<br>Example: 15.35
     * @param  ?string  $surchargeType  This is the surcharge type.<br>Example: APPOINTMENT_DELIVERY
     * @param  ?string  $level  Specifies if the surcharge applies to the entire shipment, or to an individual package.<br>Example: PACKAGE
     * @param  ?string  $description  Specifies the description for the surcharge.
     */
    public function __construct(
        public ?string $amount = null,
        public ?string $surchargeType = null,
        public ?string $level = null,
        public ?string $description = null,
    ) {}
}
