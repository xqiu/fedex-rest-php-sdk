<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class EmailDispositionDetail extends Dto
{
    /**
     * @param  ?string  $emailAddress  This is email Address.<br>Example: xxxx@xxx.com
     * @param  ?string  $type  Specify the email status.<br>Example: EMAILED
     * @param  ?string  $recipientType  Specify the recipient Type.<br>Example: SHIPPER/BROKER
     */
    public function __construct(
        public ?string $emailAddress = null,
        public ?string $type = null,
        public ?string $recipientType = null,
    ) {}
}
