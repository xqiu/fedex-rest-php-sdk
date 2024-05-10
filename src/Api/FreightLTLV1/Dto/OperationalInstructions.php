<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class OperationalInstructions extends Dto
{
    /**
     * @param  ?int  $number  Specifies the number of operational instructions returned for this shipment.<br>Example: 17
     * @param  ?string  $content  This is an operational instruction printed or available on the shipping document.<br>Example: SECURED
     */
    public function __construct(
        public readonly ?int $number = null,
        public readonly ?string $content = null,
    ) {
    }
}
