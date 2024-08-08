<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ShippingDocumentFormat extends Dto
{
    protected static array $complexArrayTypes = ['dispositions' => ShippingDocumentDispositionDetail::class];

    /**
     * @param  ?bool  $provideInstructions  For those shipping document types which have both a "form" and "instructions" component (e.g General Agency Agreement), this field indicates whether to provide the instructions.<br>Example: true
     * @param  ?DocumentFormatOptionsRequested  $optionsRequested  Indicate the requested options for document format.
     * @param  ?string  $stockType  Specifies the label stock type.  Lists the correct type of paper for the Freight address label option.Specify valid value PAPER_4_PER_PAGE_PORTRAIT.<br>Example:PAPER_TYPE
     * @param  ShippingDocumentDispositionDetail[]|null  $dispositions  Specifies how to create, organize, and return the document
     * @param  ?string  $locale  These are locale details.<br>example: 'en_US'<br><a onclick='loadDocReference("locales")'>click here to see Locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     * @param  ?string  $docType  Specify the image format used for a shipping document.<br>Example:PDF
     */
    public function __construct(
        public readonly ?bool $provideInstructions = null,
        public readonly ?DocumentFormatOptionsRequested $optionsRequested = null,
        public readonly ?string $stockType = null,
        public readonly ?array $dispositions = null,
        public readonly ?string $locale = null,
        public readonly ?string $docType = null,
    ) {
    }
}
