<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class InternationalDistributionDetail extends Dto
{
    /**
     * @param  Dimensions  $totalDimensions  Conditional.<br>The dimensions of the package; length, width & height. All three dimensions must be indicated.<br>Note: Dimensions are required with YOUR_PACKAGING package type.
     * @param  Money  $declaredCurrencies  This is commodity value used for Customs declaration.
     * @param  string  $clearanceFacilityLocationId  Specifies the clearance facility location id.
     * @param  ?string  $dropOffType  Specifies drop off type.
     * @param  ?TotalInsuredMoney  $totalInsuredValue  This is commodity value used for Customs declaration.
     * @param  ?string  $unitSystem  Specifies the unit system.
     */
    public function __construct(
        public Dimensions $totalDimensions,
        public Money $declaredCurrencies,
        public string $clearanceFacilityLocationId,
        public ?string $dropOffType = null,
        public ?TotalInsuredMoney $totalInsuredValue = null,
        public ?string $unitSystem = null,
    ) {}
}
