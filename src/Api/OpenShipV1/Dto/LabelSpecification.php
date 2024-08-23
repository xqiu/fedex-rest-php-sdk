<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class LabelSpecification extends Dto
{
    /**
     * @param  string  $labelStockType  Indicate the label stock type used. <br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     * @param  string  $imageType  Specify the image format used for a shipping document.<br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     * @param  ?string  $labelFormatType  Specify the label Format Type.<br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     * @param  ?string  $labelOrder  This is the order of the Shipping label/documents to be generated.
     * @param  ?CustomerSpecifiedLabelDetail  $customerSpecifiedDetail  This object allows the control of label content for customization.
     * @param  ?ContactAndAddress  $printedLabelOrigin  Specifies the contact and address details of a location.
     * @param  ?string  $labelRotation  This is applicable only to documents produced on thermal printers with roll stock.
     * @param  ?string  $labelPrintingOrientation  This is applicable only to documents produced on thermal printers with roll stock.
     * @param  ?bool  $returnedDispositionDetail  Specify whether or not the return deposition is needed.
     * @param  ?int  $resolution  Specifies the image resolution in DPI (Dots Per Inch). Valid values are 203 & 300. If not provided or for any other value, system will default it to 203.
     */
    public function __construct(
        public string $labelStockType,
        public string $imageType,
        public ?string $labelFormatType = null,
        public ?string $labelOrder = null,
        public ?CustomerSpecifiedLabelDetail $customerSpecifiedDetail = null,
        public ?ContactAndAddress $printedLabelOrigin = null,
        public ?string $labelRotation = null,
        public ?string $labelPrintingOrientation = null,
        public ?bool $returnedDispositionDetail = null,
        public ?int $resolution = null,
    ) {}
}
