<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class DocTabZoneSpecification extends Dto
{
    /**
     * @param  ?int  $zoneNumber  It is a non-negative integer that represents the portion of doc-tab in a label.<br>Example: 1
     * @param  ?string  $header  Indicates the parameter name in the header for the doc tab zone. The maximum charater limit is 7.<br>Example:  WHT
     * @param  ?string  $dataField  Indicate the path request/reply element to be printed on doc tab.<br>Example: <ul><li> REQUEST/PACKAGE/weight/Value</li><li> REQUEST/PACKAGE/weight/Value</li><li> REQUEST/PACKAGE/InsuredValue/Amount</li><li> REQUEST/SHIPMENT/SpecialServicesRequested/CodDetail/CodCollectionAmount/Amount</li><li>REQUEST/SHIPMENT/Shipper/Address/StreetLines[1]CLIENT/MeterNumber</li><li> TRANSACTION/CustomerTransactionId</li><li> REQUEST/SHIPMENT/TotalWeight/Value</li><li> REQUEST/SHIPMENT/ShipTimestamp</li><li> REQUEST/SHIPMENT/Recipient/Contact/PersonName</li><li> REPLY/SHIPMENT/OperationalDetail/DeliveryDate</li><li>  REPLY/SHIPMENT/RATES/ACTUAL/totalBaseCharge/Amount</li><li> REPLY/SHIPMENT/RATES/ACTUAL/totalFreightDiscounts/Amount</li><li>  REPLY/SHIPMENT/RATES/ACTUAL/totalSurcharges/Amount</li><li> REPLY/SHIPMENT/RATES/ACTUAL/totalNetCharge/Amount</li><li> REPLY/SHIPMENT/RATES/PAYOR_ACCOUNT_PACKAGE/totalSurcharges/Amount</li></ul>
     * @param  ?string  $literalValue  Indicates the actual data to be printed in the label<br>
     * @param  ?string  $justification  Indicates the justification format for the string.
     */
    public function __construct(
        public readonly ?int $zoneNumber = null,
        public readonly ?string $header = null,
        public readonly ?string $dataField = null,
        public readonly ?string $literalValue = null,
        public readonly ?string $justification = null,
    ) {
    }
}
