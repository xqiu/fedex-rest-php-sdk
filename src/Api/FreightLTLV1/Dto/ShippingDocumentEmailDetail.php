<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class ShippingDocumentEmailDetail extends Dto
{
    protected static array $complexArrayTypes = ['eMailRecipients' => ShippingDocumentEmailRecipient::class];

    /**
     * @param  ShippingDocumentEmailRecipient[]  $eMailRecipients  Indicates the shipping document email recipients.
     * @param  ?string  $locale  These are locale details.<br>Example: 'en_US'<br><a onclick='loadDocReference("locales")'>click here to see locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     * @param  ?string  $grouping  Identifies the convention by which documents are to be grouped as email attachment.
     */
    public function __construct(
        public readonly array $eMailRecipients,
        public readonly ?string $locale = null,
        public readonly ?string $grouping = null,
    ) {
    }
}
