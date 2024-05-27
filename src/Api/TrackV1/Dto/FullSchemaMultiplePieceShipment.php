<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaMultiplePieceShipment extends Dto
{
    /**
     * @param  TrackingInfo  $masterTrackingNumberInfo  Tracking details for the shipment to be tracked
     * @param  string  $associatedType  The associated shipment type, such as MPS, Group MPS, or an outbound shipment which is linked to a return shipment.<br>Example: STANDARD_MPS<br>STANDARD_MPS: Single shipment with multiple packages, where tracking number got assigned to all pieces, one tracking number is treated as master tracking number while others are child tracking numbers.<br>Group MPS: Behavior is just like standard MPS but it’s created differently. The shipper must be enrolled for this by a particular reference type like ‘PO’ (purchase order).Then any package order create on the same day going to the same place that has the reference number will get grouped into GMPS relationships.<br>OUTBOUND_LINK_TO_RETURN: is an RTRN relationship.Same concept as an MPS.the OUTBOUND_LINK_TO_RETURN is the Master outbound package tracking number, that when tracked with this indicator you can get all the child return pieces.
     * @param  ?bool  $includeDetailedScans  Indicates if detailed scans are requested or not. <br>Valid values are True, or False.
     * @param  ?PagingDetails  $pagingDetails  Specify the details about how to retrieve the subsequent pages when there is more than one page in the TrackReply.
     */
    public function __construct(
        public readonly TrackingInfo $masterTrackingNumberInfo,
        public readonly string $associatedType,
        public readonly ?bool $includeDetailedScans = null,
        public readonly ?PagingDetails $pagingDetails = null,
    ) {
    }
}
