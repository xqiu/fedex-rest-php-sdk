<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class DocumentGenerationDetail extends Dto
{
    /**
     * @param  ?string  $letterhead  Indicates the letterhead requirement type.<br>Example: OPTIONAL
     * @param  ?string  $electronicSignature  Indicates electronic signature requirement type.<br>Example:  OPTIONAL
     * @param  ?int  $minimumCopiesRequired  It is a non-Negative Integer.<br>Example: 3
     * @param  ?string  $type  It is an Enterprise Document Type.<br>Example: COMMERCIAL_INVOICE
     */
    public function __construct(
        public ?string $letterhead = null,
        public ?string $electronicSignature = null,
        public ?int $minimumCopiesRequired = null,
        public ?string $type = null,
    ) {}
}
