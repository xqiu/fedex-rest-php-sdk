<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaSpecialServiceOptions extends Dto
{
    /**
     * @param  RequestedShipment  $requestedShipment  shipment information for the shipment being requested
     * @param  ?AccountNumber  $accountNumber  This is FedEx account number details.
     * @param  ?string[]  $carrierCodes  Optionally supplied to restrict the results to services for a specific carrier. Valid values are: FDXE, FDXG, FXSP. <br> Example: ["FDXG", "FDXE"]
     */
    public function __construct(
        public RequestedShipment $requestedShipment,
        public ?AccountNumber $accountNumber = null,
        public ?array $carrierCodes = null,
    ) {}
}
