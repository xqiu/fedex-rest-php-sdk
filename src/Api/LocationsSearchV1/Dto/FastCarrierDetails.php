<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1\Dto;

use ShipStream\FedEx\Dto;

final class FastCarrierDetails extends Dto
{
    /**
     * @param  ?string  $serviceType  Specifies the service type.<br>Example: PRIORITY_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     * @param  ?string  $serviceCategory  The service category for which this capability applies.
     */
    public function __construct(
        public ?string $serviceType = null,
        public ?string $serviceCategory = null,
    ) {}
}
