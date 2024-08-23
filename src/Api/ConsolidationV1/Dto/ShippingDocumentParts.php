<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class ShippingDocumentParts extends Dto
{
    /**
     * @param  ?int  $documentPartSequenceNumber  Specifies the one-origin position of this part within a document.
     * @param  ?string  $image  Specifies the one-origin position of this part within a document.
     */
    public function __construct(
        public ?int $documentPartSequenceNumber = null,
        public ?string $image = null,
    ) {}
}
