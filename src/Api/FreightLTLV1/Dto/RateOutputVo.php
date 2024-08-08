<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class RateOutputVo extends Dto
{
    protected static array $complexArrayTypes = ['rateReplyDetails' => LtlRateReplyDetail::class, 'alerts' => Alert::class];

    /**
     * @param  ?string  $customerTransactionId  This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br>Example: AnyCo_order123456789
     * @param  LtlRateReplyDetail[]|null  $rateReplyDetails  This object will hold the rate and shipment data returned for a request.
     * @param  ?string  $quoteDate  The date on which the rate is quoted.<br> Example: 2019-09-18
     * @param  ?bool  $encoded  Specifies the encoded form of the rate.
     * @param  Alert[]|null  $alerts  The cxs alert code, alert type, and alert message obtained when a rate quote is requested.
     */
    public function __construct(
        public readonly ?string $customerTransactionId = null,
        public readonly ?array $rateReplyDetails = null,
        public readonly ?string $quoteDate = null,
        public readonly ?bool $encoded = null,
        public readonly ?array $alerts = null,
    ) {
    }
}
