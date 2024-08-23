<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class LabelResponseVo extends Dto
{
    /**
     * @param  ?int  $copiesToPrint  These are the number of copies to print for the specific document type.<br>Example: 10
     * @param  ?string  $contentType  Indicates the type of document/label.
     * @param  ?string  $trackingNumber  This is the tracking number of the package. <br>Example: 49XXX0000XXX20032835<br>
     * @param  ?string  $docType  This is the document type.<br>Example: PDF
     * @param  ?string  $encodedLabel  Specifies if the document is encoded.<br>Example: encoded label
     * @param  ?string  $url  The URL of the shipping document/label<br>Example: https://.../document/v2/document/retrieve/SH,794816968200_Merge/isLabel=true&autoPrint=false<br><i>Note: The URL once created will be active for 24 hours.</i>
     */
    public function __construct(
        public ?int $copiesToPrint = null,
        public ?string $contentType = null,
        public ?string $trackingNumber = null,
        public ?string $docType = null,
        public ?string $encodedLabel = null,
        public ?string $url = null,
    ) {}
}
