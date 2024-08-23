<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class CxsError extends Dto
{
    protected static array $complexArrayTypes = ['parameterList' => Parameter::class];

    /**
     * @param  ?string  $code  Indicates the error code.<br>Example: PICKUP.POSTALCODE.MISSING
     * @param  Parameter[]|null  $parameterList
     * @param  ?string  $message  Indicates the description of API error alert message.<br>Example: PostalCode is missing.
     */
    public function __construct(
        public ?string $code = null,
        public ?array $parameterList = null,
        public ?string $message = null,
    ) {}
}
