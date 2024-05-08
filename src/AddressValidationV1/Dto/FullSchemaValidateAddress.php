<?php

declare(strict_types=1);

namespace ShipStream\FedEx\AddressValidationV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaValidateAddress extends Dto
{
    protected static array $complexArrayTypes = ['addressesToValidate' => [ResolveContactAndAddress::class]];

    /**
     * @param  ResolveContactAndAddress[]  $addressesToValidate  Indicate the address to be validated and resolved. This includes the address details, such as streetline, state or province code, country code and postal code. <br><br><i>Note: Up to 100 of these can be submitted in a single request.</i>
     * @param  ?string  $inEffectAsOfTimestamp  This can be used to request the characteristics of an address had at a particular time in history. This defaults to current date time (of the Address Validation System). This is useful because the AddressValidation database is dynamic and stores historical data. Characteristics such as Business/Residential indicator may change over time.<br> Example: 2019-09-06
     * @param  ?AddressResolutionControlParameters  $validateAddressControlParameters  Specify the parameters applied to validate the address.
     */
    public function __construct(
        public readonly array $addressesToValidate,
        public readonly ?string $inEffectAsOfTimestamp = null,
        public readonly ?AddressResolutionControlParameters $validateAddressControlParameters = null,
    ) {
    }
}
