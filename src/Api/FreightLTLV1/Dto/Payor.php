<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class Payor extends Dto
{
    /**
     * @param  Party2  $responsibleParty  Use this object to provide the attributes such as physical address, contact information and account number information.
     */
    public function __construct(
        public Party2 $responsibleParty,
    ) {}
}
