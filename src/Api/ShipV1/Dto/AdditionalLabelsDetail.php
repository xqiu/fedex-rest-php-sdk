<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class AdditionalLabelsDetail extends Dto
{
    /**
     * @param  ?string  $type  Specify the type of additional  details to be added on the label.<br>Example:MANIFEST
     * @param  ?int  $count  Specifies the count of label to return.<br>Example:1
     */
    public function __construct(
        public ?string $type = null,
        public ?int $count = null,
    ) {}
}
