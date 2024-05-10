<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ExpressFreightDetail extends Dto
{
    /**
     * @param  ?int  $bookingConfirmationNumber  This is an advance booking number.  <br>Minimum length: 5 digits <br> Maximum length: 12 digits  <br>Example: XXXX56789812
     * @param  ?int  $shippersLoadAndCount  Indicates the content of a container were loaded and counted by the shipper.<br>Minimum length: 1 digits <br> Maximum length: 5 digits <br>Example: 100
     * @param  ?bool  $packingListEnclosed  This indicates whether or not the Packing List is enclosed with the shipment. A packing list is a document that includes details about the contents of a package. <br> Example: true
     */
    public function __construct(
        public readonly ?int $bookingConfirmationNumber = null,
        public readonly ?int $shippersLoadAndCount = null,
        public readonly ?bool $packingListEnclosed = null,
    ) {
    }
}
