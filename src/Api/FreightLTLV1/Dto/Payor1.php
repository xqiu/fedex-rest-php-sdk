<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class Payor1 extends Dto
{
    /**
     * @param  ?Party22  $responsibleParty  Use this object to provide the attributes such as physical address, contact information and account number information.
     */
    public function __construct(
        public readonly ?Party22 $responsibleParty = null,
    ) {
    }
}
