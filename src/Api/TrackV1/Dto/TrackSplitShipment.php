<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class TrackSplitShipment extends Dto
{
    /**
     * @param  ?string  $pieceCount  Field which holds the number of pieces in the part.<br> Example: 10
     * @param  ?string  $statusDescription  Field which holds human-readable description of the status. <br> Example: status
     * @param  ?string  $timestamp  Field which holds the date and time the status began.<br>Example: '2019-05-07T08:00:07'
     * @param  ?string  $statusCode  Field which holds the status code. <br> Example: statusCode
     */
    public function __construct(
        public ?string $pieceCount = null,
        public ?string $statusDescription = null,
        public ?string $timestamp = null,
        public ?string $statusCode = null,
    ) {}
}
