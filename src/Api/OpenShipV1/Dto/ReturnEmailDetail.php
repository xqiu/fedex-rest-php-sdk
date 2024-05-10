<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ReturnEmailDetail extends Dto
{
    /**
     * @param  string  $merchantPhoneNumber  This is the merchant phone number and required for Email Return Labels.<br>Example: 19012635656
     * @param  ?string[]  $allowedSpecialService  Indicate the allowed (merchant-authorized) special services which may be selected when the subsequent shipment is created.<br>Only services represented in EmailLabelAllowedSpecialServiceType will be controlled by this list.
     */
    public function __construct(
        public readonly string $merchantPhoneNumber,
        public readonly ?array $allowedSpecialService = null,
    ) {
    }
}
