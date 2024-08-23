<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class Payment extends Dto
{
    /**
     * @param  ?Payor  $payor  Information about the person who is paying for the shipment.  Not applicable for credit card payment.
     * @param  ?string  $paymentType  Specify the payment Type. <br>Note: This is required for Express, Ground and SmartPost shipments.<br> The payment type COLLECT is applicable only for Ground shipments.
     */
    public function __construct(
        public ?Payor $payor = null,
        public ?string $paymentType = null,
    ) {}
}
