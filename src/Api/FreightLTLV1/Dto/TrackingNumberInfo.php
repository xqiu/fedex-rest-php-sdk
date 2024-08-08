<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class TrackingNumberInfo extends Dto
{
    /**
     * @param  ?string  $trackingNumber  The value of the package identifier that is to be used to retrieve the tracking information for a package or group of packages. The only type supported is 'TRACKING_NUMBER_OR_DOORTAG'.  In case of duplicate shipments using the same tracking number, the trackingNumberUniqueId is needed to differentiate between shipments. <br> Example: 123456789012
     * @param  ?string  $trackingQualifier  Specifies the tracking qualifier
     * @param  ?string  $trackingCarrier  Specifies the FedEx operating company (transportation) used for this package's delivery. The valid values are FDXE, FDXG, FXFR, FXSP, FDXC, FXCC.<br>Example: FDXE
     * @param  ?string  $trackingUniqueId  This is the unique qualifier for a specific package, used to distinguish between duplicate FedEx trackingNumbers. <br> Example: 245822~123456789012~FDEG
     */
    public function __construct(
        public readonly ?string $trackingNumber = null,
        public readonly ?string $trackingQualifier = null,
        public readonly ?string $trackingCarrier = null,
        public readonly ?string $trackingUniqueId = null,
    ) {
    }
}
