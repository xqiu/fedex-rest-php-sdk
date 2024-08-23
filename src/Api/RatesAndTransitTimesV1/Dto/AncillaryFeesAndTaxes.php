<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class AncillaryFeesAndTaxes extends Dto
{
    /**
     * @param  ?float  $amount  Specifies the list of ancillary fees And Taxes
     * @param  ?string  $description  Identifies the amount of the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.
     * @param  ?string  $type  Identifies the total amount of the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.
     */
    public function __construct(
        public ?float $amount = null,
        public ?string $description = null,
        public ?string $type = null,
    ) {}
}
