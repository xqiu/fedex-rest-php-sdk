<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class PendingShipmentProcessingOptionsRequested extends Dto
{
    /**
     * @param  ?string[]  $options  These are processing options.
     */
    public function __construct(
        public ?array $options = null,
    ) {}
}
