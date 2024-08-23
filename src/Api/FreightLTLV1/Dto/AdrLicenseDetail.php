<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class AdrLicenseDetail extends Dto
{
    /**
     * @param  ?LicenseOrPermitDetail  $licenseOrPermitDetail  This contains the ADR license information, which identifies the license number, the effective date and the expiration date under which the customer is allowed to ship.
     */
    public function __construct(
        public ?LicenseOrPermitDetail $licenseOrPermitDetail = null,
    ) {}
}
