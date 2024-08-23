<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GlobalTradeV1\Dto;

use ShipStream\FedEx\Dto;

final class RegulatoryDocument extends Dto
{
    /**
     * @param  ?RegulatoryMessage  $userMessage  Object representing the information needed during the interaction with clients
     * @param  ?string  $supportType  This represents document support type.
     * @param  ?string  $allowability  This is a Requirement type.
     * @param  ?string  $fileName  This represents file name.
     * @param  ?string  $documentType  Specifies the document type.
     * @param  ?string  $agencyUrl  Represents the agency url.
     * @param  ?string  $documentUrl  Represents document url.
     * @param  ?string  $id  This specifies Regualatory document id.
     * @param  ?string  $agencyName  Specifies the agency name.
     * @param  ?LocalizedAttributeDetail  $localizedAttributes  Specifies the localized attribute details.
     */
    public function __construct(
        public ?RegulatoryMessage $userMessage = null,
        public ?string $supportType = null,
        public ?string $allowability = null,
        public ?string $fileName = null,
        public ?string $documentType = null,
        public ?string $agencyUrl = null,
        public ?string $documentUrl = null,
        public ?string $id = null,
        public ?string $agencyName = null,
        public ?LocalizedAttributeDetail $localizedAttributes = null,
    ) {}
}
