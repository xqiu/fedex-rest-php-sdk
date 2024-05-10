<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class LtlPayment extends Dto
{
    /**
     * @param  ?LtlPayor  $payor  This is payer Information responsible for paying for the shipment.
     * @param  ?string  $paymentType  Indicate the payment Type.
     */
    public function __construct(
        public readonly ?LtlPayor $payor = null,
        public readonly ?string $paymentType = null,
    ) {
    }
}
