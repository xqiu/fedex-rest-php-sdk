<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaDeleteOpenShipment extends Dto
{
    /**
     * @param  string  $index  This is a unique value for the shipment (must be unique for stand-alone open shipments, or unique within consolidation if consolidation key is provide).<br>Example: Test1234
     * @param  PartyAccountNumber  $accountNumber  This is FedEx Account number details.
     */
    public function __construct(
        public string $index,
        public PartyAccountNumber $accountNumber,
    ) {}
}
