<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class CustomerReference extends Dto
{
    /**
     * @param  ?string  $customerReferenceType  This is a customer reference type. The value specified here for the element is printed on the Commercial Invoice only for tracking and label information.<p>Note: <ul><li>The P_O_NUMBER value must be specified in customerReferences under requestedPackageLineItems</li><li>The INVOICE_NUMBER value that is printed on the FedEx-supplied invoice must be specified in customerReferences under commercialInvoice. Value defined in this section will print on the label that is attached to the package</li></ul> <br>Note: INTRACOUNTRY_REGULATORY_REFERENCE is applicable only in Intra-Brazil.<br><a onclick='loadDocReference("customerreferencetypes")'>For more information, click here for Cutsomer References ENUMs</a>
     * @param  ?string  $value  This is a customer reference type value.<br>Example: 3686<br>Note: Maximum length for all customer references is 40 characters.
     */
    public function __construct(
        public readonly ?string $customerReferenceType = null,
        public readonly ?string $value = null,
    ) {
    }
}
