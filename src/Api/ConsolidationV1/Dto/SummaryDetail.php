<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class SummaryDetail extends Dto
{
    /**
     * @param  ?int  $expressPacakgeCount  Number of Express packages
     * @param  ?SummaryDetailExpressTotalPackageWeight  $expressTotalPackageWeight  The total weight of all Express packages
     * @param  ?SummaryDetailExpressTotalPackageAdjustedWeight  $expressTotalPackageAdjustedWeight  Adjusted total package weight for Exress packages
     * @param  ?int  $expressFreightPackageCount  Number of Express freight packages
     * @param  ?SummaryDetailExpressTotalFreightWeight  $expressTotalFreightWeight  Total weight of Express freight packages
     * @param  ?SummaryDetailExpressTotalFreightAdjustedWeight  $expressTotalFreightAdjustedWeight  Adjusted total weight of Express freight packages
     * @param  ?int  $groundPackageCount  Number of Ground packages
     * @param  ?SummaryDetailGroundTotalPackageWeight  $groundTotalPackageWeight  Total weight of Ground packages
     * @param  ?SummaryDetailGroundTotalPackageAdjustedWeight  $groundTotalPackageAdjustedWeight  Adjusted total weight of Ground packages
     * @param  ?int  $numberOfUnconsolidatedCommodities  Number of unconsolidated commodities
     */
    public function __construct(
        public ?int $expressPacakgeCount = null,
        public ?SummaryDetailExpressTotalPackageWeight $expressTotalPackageWeight = null,
        public ?SummaryDetailExpressTotalPackageAdjustedWeight $expressTotalPackageAdjustedWeight = null,
        public ?int $expressFreightPackageCount = null,
        public ?SummaryDetailExpressTotalFreightWeight $expressTotalFreightWeight = null,
        public ?SummaryDetailExpressTotalFreightAdjustedWeight $expressTotalFreightAdjustedWeight = null,
        public ?int $groundPackageCount = null,
        public ?SummaryDetailGroundTotalPackageWeight $groundTotalPackageWeight = null,
        public ?SummaryDetailGroundTotalPackageAdjustedWeight $groundTotalPackageAdjustedWeight = null,
        public ?int $numberOfUnconsolidatedCommodities = null,
    ) {}
}
