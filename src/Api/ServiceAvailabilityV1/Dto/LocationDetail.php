<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class LocationDetail extends Dto
{
    /**
     * @param  ?LocationDetailGeoPositionalCoordinates  $geoPositionalCoordinates  the ISO6709GeographicCoordinates for a specific geographic location
     */
    public function __construct(
        public ?LocationDetailGeoPositionalCoordinates $geoPositionalCoordinates = null,
    ) {}
}
