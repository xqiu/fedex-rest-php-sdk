<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaConfirmOpenShipment extends Dto
{
    /**
     * @param  string  $labelResponseOptions  Specify whether the encoded bytecode or the label URL to be returned in the response.<p>Valid values:<ul><li>LABEL &ndash; Indicates request is for encoded bytecode.</li><li>URL_ONLY &ndash; Indicates label URL request.</li></ul>Note: For asynchronous shipment (More than 40 packages) request only the value LABEL is suported.</p><br><br><i>Note: With URL_ONLY option, the URL once created will be active for 12 hours.</i>
     * @param  LabelSpecification  $labelSpecification  These are label specification details includes the image type, printer format, and label stock for label. Can also specify specific details such as doc-tab content, regulatory labels, and masking data on the label.
     * @param  string  $index  This is a unique value assigned to the already created Open Shipment. If this isn’t available then provide the master tracking number.<br>Example: Test1234
     * @param  mixed[]  $accountNumber  The account number associated with the shipment. <br>Example: Your account number
     * @param  ?string  $edtRequestType  Indicate whether to have estimated duties and taxes provided with the rate quotes on this shipment. Only applies for International Shipment.
     * @param  ?ShippingDocumentSpecification  $shippingDocumentSpecification  Use this object to provide all data required for additional (non-label) shipping documents to be produced.
     */
    public function __construct(
        public readonly string $labelResponseOptions,
        public readonly LabelSpecification $labelSpecification,
        public readonly string $index,
        public readonly array $accountNumber,
        public readonly ?string $edtRequestType = null,
        public readonly ?ShippingDocumentSpecification $shippingDocumentSpecification = null,
    ) {
    }
}
