<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class VariableHandlingCharges extends Dto
{
    /**
     * @param  ?float  $totalCustomerCharge  Specifies the total customer assessed handling charges.<br> Example: 445.54
     * @param  ?float  $variableHandlingCharge  The variable handling charge amount calculated based on the requested variable handling charge detail. <br> Example: 403.2
     */
    public function __construct(
        public ?float $totalCustomerCharge = null,
        public ?float $variableHandlingCharge = null,
    ) {}
}
