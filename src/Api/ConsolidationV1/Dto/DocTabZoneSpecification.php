<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class DocTabZoneSpecification extends Dto
{
    /**
     * @param  ?int  $zoneNumber  is a nonNegativeInteger<br>Example:  1
     * @param  ?string  $header  header of DocTabZoneSpecification<br>Example:  WHT
     * @param  ?string  $dataField  dataField of DocTabZoneSpecification<br>Example:  REQUEST/PACKAGE/weight/Value
     * @param  ?string  $literalValue  literalValue of DocTabZoneSpecification<br>
     * @param  ?string  $justification  Doc Tab Zone Justification Type
     */
    public function __construct(
        public ?int $zoneNumber = null,
        public ?string $header = null,
        public ?string $dataField = null,
        public ?string $literalValue = null,
        public ?string $justification = null,
    ) {}
}
