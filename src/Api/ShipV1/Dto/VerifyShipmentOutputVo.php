<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class VerifyShipmentOutputVo extends Dto
{
    protected static array $complexArrayTypes = ['alerts' => Alert::class];

    /**
     * @param  Alert[]|null  $alerts  The alerts received when a Shipment Package Validate is processed. This includes the alert code, alert type, and alert message.
     */
    public function __construct(
        public readonly ?array $alerts = null,
    ) {
    }
}
