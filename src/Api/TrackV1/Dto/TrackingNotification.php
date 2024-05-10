<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class TrackingNotification extends Dto
{
    /**
     * @param  TrackingNotificationDetail  $notificationDetail  Information about the notification email and the language of the notification requested.
     * @param  string[]  $notificationEventTypes  Identifies the events for which the client is requesting notifications. <br>Possible Values are: ON_DELIVERY, ON_ESTIMATED_DELIVERY, ON_EXCEPTION, ON_TENDER
     * @param  ?string  $role  This is to specify Recipient_Role in the shipment. <br>Possible values - BROKER, OTHER, RECIPIENT, SHIPPER <br> Example: SHIPPER
     * @param  ?bool  $currentResultRequestedFlag  If value is 'true' the current tracking results for the shipment along with notification details will be provided to the client. If 'false' only results for the notification request is provided.<br>Defaults to 'false'<br>Example: true
     */
    public function __construct(
        public readonly TrackingNotificationDetail $notificationDetail,
        public readonly array $notificationEventTypes,
        public readonly ?string $role = null,
        public readonly ?bool $currentResultRequestedFlag = null,
    ) {
    }
}
