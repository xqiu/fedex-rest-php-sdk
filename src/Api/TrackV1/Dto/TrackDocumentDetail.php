<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class TrackDocumentDetail extends Dto
{
    /**
     * @param  string  $documentType  Indicate the Tracking Document. <br>Valid values are SIGNATURE_PROOF_OF_DELIVERY, BILL_OF_LADING and FREIGHT_BILLING_DOCUMENT.<br>Example: SIGNATURE_PROOF_OF_DELIVERY.<br><i>Note: The SPOD information will be presented as a byte array instead of an image. The byte array is a base64 encoded string, which should be decoded to get the final signature image in PDF or PNG format</i>
     * @param  ?string  $documentFormat  Specifies the format of tracking document. <br>Valid values are PDF or PNG.<br>The values are key sensitive.<br>Note: documentTypes BILL_OF_LADING and FREIGHT_BILLING_DOCUMENT does not support PNG.
     */
    public function __construct(
        public readonly string $documentType,
        public readonly ?string $documentFormat = null,
    ) {
    }
}
