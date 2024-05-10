<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class CustomerSpecifiedLabelDetail extends Dto
{
    protected static array $complexArrayTypes = [
        'regulatoryLabels' => [RegulatoryLabelContentDetail::class],
        'additionalLabels' => [AdditionalLabelsDetail::class],
    ];

    /**
     * @param  ?string[]  $maskedData  Specify which data/sections on the label to be masked.<br>Note: <ul><li>SHIPPER_INFORMATION &ndash; This is used for Third Party Consignee, Intra-UK shipments.</li><li>TOTAL_WEIGHT &ndash; This replaces the Total weight with Actual Weight in Master label and AWB copies.</li></ul>
     * @param  RegulatoryLabelContentDetail[]|null  $regulatoryLabels  Specify how the regulatory details to be provided on the labels.
     * @param  AdditionalLabelsDetail[]|null  $additionalLabels  Specify how the additional details to be provided on the labels.
     * @param  ?DocTabContent  $docTabContent  Specifies details of doc tab content.
     */
    public function __construct(
        public readonly ?array $maskedData = null,
        public readonly ?array $regulatoryLabels = null,
        public readonly ?array $additionalLabels = null,
        public readonly ?DocTabContent $docTabContent = null,
    ) {
    }
}
