<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaDeleteOpenShipment extends Dto
{
    /**
     * @param  string  $index  This is a unique value for the shipment (must be unique for stand-alone open shipments, or unique within consolidation if consolidation key is provide).<br>Example: Test1234
     * @param  mixed[]  $accountNumber  The account number associated with the shipment. <br>Example: Your account number
     */
    public function __construct(
        public readonly string $index,
        public readonly array $accountNumber,
    ) {
    }
}
