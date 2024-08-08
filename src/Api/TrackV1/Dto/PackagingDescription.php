<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class PackagingDescription extends Dto
{
    /**
     * @param  ?string  $description  Indicate the packaging type description.<br> Example: FedEx Pak
     * @param  ?string  $type  Indicate the packaging type.<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
     */
    public function __construct(
        public readonly ?string $description = null,
        public readonly ?string $type = null,
    ) {
    }
}
