<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class CustomerMessage extends Dto
{
    /**
     * @param  ?string  $code  Specifies the message Code received.<br> Example:SERVICE.TYPE.INTERNATIONAL.MESSAGE
     * @param  ?string  $message  Specifies the message received by the customer.<br>                                  Example: Rate does not include duties & taxes, clearance entry fees or other import fees. The payor of duties/taxes/fees will be responsible for any applicable Clearance Entry Fees.
     */
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?string $message = null,
    ) {
    }
}
