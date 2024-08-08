<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class EtdDetail extends Dto
{
    protected static array $complexArrayTypes = ['attachedDocuments' => UploadDocumentReferenceDetail::class];

    /**
     * @param  ?string[]  $attributes  Specifies the Post Document Upload <br> Example: POST_SHIPMENT_UPLOAD_REQUESTED
     * @param  UploadDocumentReferenceDetail[]|null  $attachedDocuments  Use this object to specify the details regarding already uploded document(s). This object is required if the documents are uploaded Pre-Shipment uploaded documents. It is recommended to provide values for all elements under this object.
     * @param  ?string[]  $requestedDocumentTypes  Indicates the types of shipping documents requested by the shipper.<br>Example: CERTIFICATE_OF_ORIGIN, COMMERCIAL_INVOICE etc.
     */
    public function __construct(
        public readonly ?array $attributes = null,
        public readonly ?array $attachedDocuments = null,
        public readonly ?array $requestedDocumentTypes = null,
    ) {
    }
}
