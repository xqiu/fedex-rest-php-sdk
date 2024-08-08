<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FreightShipment2020specialServicesRequested extends Dto
{
    /**
     * @param  ?string[]  $specialServiceTypes  Special services requested for the shipment.<br>Example: FREIGHT_GUARANTEE <br><a onclick='loadDocReference("freightlevelspecialservicetypes")'>Click here to see Freight Level Special Service Types</a>
     * @param  ?FreightGuaranteeDetail  $freightGuaranteeDetail  Indicates the details of freight guarantee.
     * @param  ?FreightDirectDetail  $freightDirectDetail  Specifies the freight Direct Detail.It is used for Fedex Freight Direct.
     * @param  ?CustomDeliveryWindowDetail  $customDeliveryWindowDetail  Indicates shipment to be sent at a specific time, on a specific date, or sometime within a specific date range.
     */
    public function __construct(
        public readonly ?array $specialServiceTypes = null,
        public readonly ?FreightGuaranteeDetail $freightGuaranteeDetail = null,
        public readonly ?FreightDirectDetail $freightDirectDetail = null,
        public readonly ?CustomDeliveryWindowDetail $customDeliveryWindowDetail = null,
    ) {
    }
}
