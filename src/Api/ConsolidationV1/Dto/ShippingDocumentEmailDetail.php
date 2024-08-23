<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Dto;

use ShipStream\FedEx\Dto;

final class ShippingDocumentEmailDetail extends Dto
{
    protected static array $complexArrayTypes = ['eMailRecipients' => ShippingDocumentEmailRecipient::class];

    /**
     * @param  ShippingDocumentEmailRecipient[]  $eMailRecipients  Shipping Document Email Recipients array
     * @param  ?Locale  $locale  Locale
     * @param  ?string  $grouping  Shipping Document Email Grouping Type
     */
    public function __construct(
        public array $eMailRecipients,
        public ?Locale $locale = null,
        public ?string $grouping = null,
    ) {}
}
