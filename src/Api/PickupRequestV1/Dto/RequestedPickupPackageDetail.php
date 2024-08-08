<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class RequestedPickupPackageDetail extends Dto
{
    /**
     * @param  ?PackageSpecialServices  $packageSpecialServices  Indicates the special services associated with this package.
     */
    public function __construct(
        public readonly ?PackageSpecialServices $packageSpecialServices = null,
    ) {
    }
}
