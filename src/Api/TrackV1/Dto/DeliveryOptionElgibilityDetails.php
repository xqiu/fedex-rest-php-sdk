<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class DeliveryOptionElgibilityDetails extends Dto
{
    /**
     * @param  ?string  $option  This is the type of delivery option.<br><br><i>Note: For eligibile DISPUTE_DELIVERY, RETURN_TO_SHIPPER, SUPPLEMENT_ADDRESS go to fedex.com to perform the option/action.</i><br><br>Example: INDIRECT_SIGNATURE_RELEASE
     * @param  ?string  $eligibility  Eligibility of the customer for the specific delivery options.<br> Example: INELIGIBLE
     */
    public function __construct(
        public readonly ?string $option = null,
        public readonly ?string $eligibility = null,
    ) {
    }
}
