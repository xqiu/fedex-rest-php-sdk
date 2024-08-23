<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class AlcoholDetail extends Dto
{
    /**
     * @param  ?string  $alcoholRecipientType  Alcohol Recipient Type.<br> Example: LICENSEE
     * @param  ?string  $shipperAgreementType  Specifies what type of entity the shipper of the alcohol shipment is registered as, for example, fulfillment house, retailer or a winery.
     */
    public function __construct(
        public ?string $alcoholRecipientType = null,
        public ?string $shipperAgreementType = null,
    ) {}
}
