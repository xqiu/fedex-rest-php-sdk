<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaMultiDocumentRequest extends Dto
{
    /**
     * @param  ?MultiEtdUploadRequest  $documentInformation  Provide all the documents' details and shipment meta data
     * @param  ?string[]  $fileAttachments  Input the actual document/file to be uploaded.
     */
    public function __construct(
        public readonly ?MultiEtdUploadRequest $documentInformation = null,
        public readonly ?array $fileAttachments = null,
    ) {
    }
}
