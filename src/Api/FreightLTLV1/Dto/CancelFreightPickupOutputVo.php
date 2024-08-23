<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class CancelFreightPickupOutputVo extends Dto
{
    protected static array $complexArrayTypes = ['alerts' => Alert::class];

    /**
     * @param  ?string  $pickupConfirmationCode  This is the Pickup confirmation code. <br> Example: XXXX1007MEM62XXXX
     * @param  ?string  $cancelConfirmationMessage  Indicates the confirmation message for cancelled pickup.<br> Example: Requested pickup has been cancelled Successfully.
     * @param  Alert[]|null  $alerts  Optional alerts received when a cancel pickup is requested. This includes an alert code, type, and message.
     */
    public function __construct(
        public ?string $pickupConfirmationCode = null,
        public ?string $cancelConfirmationMessage = null,
        public ?array $alerts = null,
    ) {}
}
