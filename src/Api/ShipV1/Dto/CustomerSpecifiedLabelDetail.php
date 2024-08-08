<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class CustomerSpecifiedLabelDetail extends Dto
{
    protected static array $complexArrayTypes = [
        'regulatoryLabels' => RegulatoryLabelContentDetail::class,
        'additionalLabels' => AdditionalLabelsDetail::class,
    ];

    /**
     * @param  ?string[]  $maskedData  Controls which data/sections will be suppressed.<br>Example: TOTAL_WEIGHT
     * @param  RegulatoryLabelContentDetail[]|null  $regulatoryLabels  Specify how the regulatory details to be provided on the labels.
     * @param  AdditionalLabelsDetail[]|null  $additionalLabels  Specify how the additional details to be provided on the labels.
     * @param  ?DocTabContent  $docTabContent  Specifies details of doc tab content.It is only applicable only with imageType as ZPLII.
     */
    public function __construct(
        public readonly ?array $maskedData = null,
        public readonly ?array $regulatoryLabels = null,
        public readonly ?array $additionalLabels = null,
        public readonly ?DocTabContent $docTabContent = null,
    ) {
    }
}
