<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class TaxpayerIdentification extends Dto
{
    /**
     * @param  ?string  $number  Specify tax ID number. Maximum length is 18. <br>Example: 123567
     * @param  ?string  $tinType  Indicate the type of tax identification number.
     * @param  ?string  $usage  Specify the reason for using the tax identification number in shipment processing.
     * @param  ?string  $effectiveDate  Specify the tax ID effective date.<br>Example: 2000-01-23T04:56:07.000+00:00
     * @param  ?string  $expirationDate  Specify the tax ID expiration date.<br>Example: 2000-01-23T04:56:07.000+00:00
     */
    public function __construct(
        public ?string $number = null,
        public ?string $tinType = null,
        public ?string $usage = null,
        public ?string $effectiveDate = null,
        public ?string $expirationDate = null,
    ) {}
}
