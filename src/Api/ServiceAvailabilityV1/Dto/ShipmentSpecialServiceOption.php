<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class ShipmentSpecialServiceOption extends Dto
{
    /**
     * @param  ?string  $customerIntegrationMode  Specifies customer Integration Mode
     * @param  ?string  $astraDescription  Specifies the astra label description
     * @param  ?string[]  $ltlPaymentTerms
     * @param  ?string  $subType  Specifies sub-type of the special service option
     * @param  ?string  $value  Specifies the value of the special service option.
     * @param  ?string  $specialServiceType  Specify special services requested for the package.<br>Example: BROKER_SELECT_OPTION<br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment Level Special Service Types.</a>
     */
    public function __construct(
        public ?string $customerIntegrationMode = null,
        public ?string $astraDescription = null,
        public ?array $ltlPaymentTerms = null,
        public ?string $subType = null,
        public ?string $value = null,
        public ?string $specialServiceType = null,
    ) {}
}
