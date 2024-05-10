<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageRating extends Dto
{
    protected static array $complexArrayTypes = ['packageRateDetails' => [PackageRateDetail2::class]];

    /**
     * @param  ?float  $effectiveNetDiscount  This is the difference between the list and account net charge.<br>Example: 0.0
     * @param  ?string  $actualRateType  This is the actual rate type. It identifies which entry in the following array is considered as presenting the actual rates for the package.<br>Example: PAYOR_ACCOUNT_PACKAGE
     * @param  PackageRateDetail2[]|null  $packageRateDetails  Data for a package's rates, as calculated per a specific rate type.
     */
    public function __construct(
        public readonly ?float $effectiveNetDiscount = null,
        public readonly ?string $actualRateType = null,
        public readonly ?array $packageRateDetails = null,
    ) {
    }
}
