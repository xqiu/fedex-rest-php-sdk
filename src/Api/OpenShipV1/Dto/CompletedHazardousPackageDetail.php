<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class CompletedHazardousPackageDetail extends Dto
{
    protected static array $complexArrayTypes = ['containers' => [ValidatedHazardousContainer::class]];

    /**
     * @param  ?string  $regulation  Specifies the hazardous package regulation type.<br>Example: IATA
     * @param  ?string  $accessibility  Specifies the hazardous package accessibility.<br>Example: ACCESSIBLE
     * @param  ?string  $labelType  Specifies the label type for Hhardous package.<br>Example: II_YELLOW
     * @param  ValidatedHazardousContainer[]|null  $containers  Indicates one or more approved containers used to pack dangerous goods commodities. This does not describe any individual inner receptacles that may be within this container.
     * @param  ?bool  $cargoAircraftOnly  A Boolean value that, when True, specifies the mode of shipment transportation should be Cargo Aircraft for Dangerous Goods. <br>Note: An identifier DGD-CAO is added in AWB for cargo aircraft shipments.
     * @param  ?string  $referenceId  A unique reference id that matches the package to a package configuration. This is populated if the client provided a package configuration for several packages that have the exact same dangerous goods content.<br>Example: 123456
     * @param  ?float  $radioactiveTransportIndex  Specifies the maximum radiation level from the package (measured in microSieverts per hour at a distance of one meter from the external surface of the package, divided by 10).<br>Example: 2.45
     */
    public function __construct(
        public readonly ?string $regulation = null,
        public readonly ?string $accessibility = null,
        public readonly ?string $labelType = null,
        public readonly ?array $containers = null,
        public readonly ?bool $cargoAircraftOnly = null,
        public readonly ?string $referenceId = null,
        public readonly ?float $radioactiveTransportIndex = null,
    ) {
    }
}
