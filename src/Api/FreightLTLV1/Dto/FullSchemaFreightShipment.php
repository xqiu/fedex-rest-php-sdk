<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaFreightShipment extends Dto
{
    protected static array $attributeMap = ['oneLabelAtAtime' => 'oneLabelAtATime'];

    /**
     * @param  FreightRequestedShipmentFreight  $freightRequestedShipment  The descriptive data for the FreightShipment being tendered to FedEx.
     * @param  string  $labelResponseOptions  <p>If the value is LABEL, the encoded label will be included in the response and if the value is  URL_ONLY, the response will include the URLs.</p><p><i>Note: With URL_ONLY option, the URL once created will be active for 24 hours.</i></p>
     * @param  ShipperAccountNumber  $accountNumber  The account number associated with the shipment.
     * @param  ?bool  $oneLabelAtAtime  If the value is false, it uses single shot MPS shipments where in all the packages are processed in the same transaction and can generate number of labels for the handling units all at once. If the value is true, the MPS shipment processes packages and labels one at a time. Default value is false.
     *                                  <br>Example: true or false
     */
    public function __construct(
        public readonly FreightRequestedShipmentFreight $freightRequestedShipment,
        public readonly string $labelResponseOptions,
        public readonly ShipperAccountNumber $accountNumber,
        public readonly ?bool $oneLabelAtAtime = null,
    ) {
    }
}
