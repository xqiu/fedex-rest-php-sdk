<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class PrintedReference extends Dto
{
    /**
     * @param  ?string  $printedReferenceType  Identifies a particular reference identifier printed on a Freight bill of lading.
     * @param  ?string  $value  Indicates the value for printed type.<br> Example: 1
     */
    public function __construct(
        public readonly ?string $printedReferenceType = null,
        public readonly ?string $value = null,
    ) {
    }
}
