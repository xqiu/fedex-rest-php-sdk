<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class CommercialInvoice extends Dto
{
    protected static array $complexArrayTypes = ['customerReferences' => [CustomerReference::class]];

    /**
     * @param  ?string  $originatorName  The originatorName that will populate the Commercial Invoice (or Pro Forma).<br>Example: originator name
     * @param  ?string[]  $comments  The comments that will populate the Commercial Invoice (or Pro Forma). Only the comments specified in the first two indexes of the array will be printed on the invoice and other comments would be ignored as the limitation is set for only two indexes. It considers the comment which is in the first index as a Special Instructions, Hence the comment at first index will be printed under special instructions and the other will be printed at comments section in the Commercial Invoice Document. <br>Example: comments
     * @param  CustomerReference[]|null  $customerReferences  These are additional customer reference data for commercial invoice.
     * @param  ?Money  $taxesOrMiscellaneousCharge  This customs value is applicable for all items(or units) under the specified commodity
     * @param  ?string  $taxesOrMiscellaneousChargeType  Specifies the Taxes Or Miscellaneous Charge Type<br>Example: COMMISSIONS
     * @param  ?Money  $freightCharge  This customs value is applicable for all items(or units) under the specified commodity
     * @param  ?Money  $packingCosts  This customs value is applicable for all items(or units) under the specified commodity
     * @param  ?Money  $handlingCosts  This customs value is applicable for all items(or units) under the specified commodity
     * @param  ?string  $declarationStatement  This is the declaration statement which will populate the Commercial Invoice (or Pro Forma).<br>Maximum length is 554.<br>Example: declarationStatement
     * @param  ?string  $termsOfSale  The termsOfSale that will populate the Commercial Invoice (or Pro Forma). Max length is 3<br>Example: FCA
     * @param  ?string  $specialInstructions  These are special instructions that will be populated on the Commercial Invoice (or Pro Forma).<br>Example: specialInstructions
     * @param  ?string  $shipmentPurpose  The reason for the shipment. Note: SOLD is not a valid purpose for a Proforma Invoice.<br>Example: REPAIR_AND_RETURN
     * @param  ?ShipEmailDispositionDetail  $emailNotificationDetail  These are email disposition details. Provides the type and email addresses of e-mail recipients. If returnedDispositionDetail in labelSpecification is set as true then email will be send with label and documents copy.
     */
    public function __construct(
        public readonly ?string $originatorName = null,
        public readonly ?array $comments = null,
        public readonly ?array $customerReferences = null,
        public readonly ?Money $taxesOrMiscellaneousCharge = null,
        public readonly ?string $taxesOrMiscellaneousChargeType = null,
        public readonly ?Money $freightCharge = null,
        public readonly ?Money $packingCosts = null,
        public readonly ?Money $handlingCosts = null,
        public readonly ?string $declarationStatement = null,
        public readonly ?string $termsOfSale = null,
        public readonly ?string $specialInstructions = null,
        public readonly ?string $shipmentPurpose = null,
        public readonly ?ShipEmailDispositionDetail $emailNotificationDetail = null,
    ) {
    }
}
