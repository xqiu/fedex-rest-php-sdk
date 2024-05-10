<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class StatusDetail extends Dto
{
    protected static array $complexArrayTypes = ['ancillaryDetails' => [StatusAncillaryDetail::class]];

    /**
     * @param  ?mixed[]  $scanLocation  Address information related to the associated Status.
     * @param  ?string  $code  A code that identifies this type of status.<br> Example:PU,DE,DP,HL,OC
     * @param  ?string  $derivedCode  Specifies the latest status detail code of the package.<br> Example:PU,DE,DP,HL,OC
     * @param  StatusAncillaryDetail[]|null  $ancillaryDetails  Specifies the cause of exception along with any action that needs to taken by customer.
     * @param  ?string  $statusByLocale  This is the latest tracking status by locale.<br> Example: Picked up
     * @param  ?string  $description  A human-readable description of this status.<br> Example: Picked up
     * @param  ?DelayDetail  $delayDetail  Specifies the information about delays.
     */
    public function __construct(
        public readonly ?array $scanLocation = null,
        public readonly ?string $code = null,
        public readonly ?string $derivedCode = null,
        public readonly ?array $ancillaryDetails = null,
        public readonly ?string $statusByLocale = null,
        public readonly ?string $description = null,
        public readonly ?DelayDetail $delayDetail = null,
    ) {
    }
}
