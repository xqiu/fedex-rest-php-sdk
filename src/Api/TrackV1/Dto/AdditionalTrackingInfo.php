<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class AdditionalTrackingInfo extends Dto
{
    protected static array $complexArrayTypes = ['packageIdentifiers' => [PackageIdentifier::class]];

    /**
     * @param  ?bool  $hasAssociatedShipments  Field which indicates if the current shipment has associated shipments.<br> Example: false
     * @param  ?string  $nickname  Field which holds information about nickname of the shipment. <br> Example: Shipment nickname
     * @param  PackageIdentifier[]|null  $packageIdentifiers  Other related identifiers for this package such as reference numbers, purchase order number etc. Provides identifiers other than tracking number that can be used in order to track the shipment.
     * @param  ?string  $shipmentNotes  Field which holds customer assigned notes for a package.<br> Example: shipment notes
     */
    public function __construct(
        public readonly ?bool $hasAssociatedShipments = null,
        public readonly ?string $nickname = null,
        public readonly ?array $packageIdentifiers = null,
        public readonly ?string $shipmentNotes = null,
    ) {
    }
}
