<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class CommodityClarificationDetail extends Dto
{
    protected static array $complexArrayTypes = ['suggestions' => [SuggestedCommodityDetail::class]];

    /**
     * @param  ?int  $commodityIndex  This is a index identifying the commodity in the request that resulted in this COMMODITY or DOCUMENT type prohibition.<br>Example: 25
     * @param  SuggestedCommodityDetail[]|null  $suggestions  These are suggested commodity details.
     */
    public function __construct(
        public readonly ?int $commodityIndex = null,
        public readonly ?array $suggestions = null,
    ) {
    }
}
