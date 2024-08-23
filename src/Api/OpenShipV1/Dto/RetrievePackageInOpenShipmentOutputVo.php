<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class RetrievePackageInOpenShipmentOutputVo extends Dto
{
    protected static array $complexArrayTypes = ['alerts' => Alert::class];

    /**
     * @param  ?RequestedPackageLineItem  $requestedpackageLineItem  These are one or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<ul><li>At least one instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.</li><li>Single piece requests will have one RequestedPackageLineItem.</li><li>Multiple piece requests will have multiple RequestedPackageLineItems.</li><li>Maximum occurrences is 30.</li></ul>
     * @param  Alert[]|null  $alerts  The alerts received when a shipShipment is processed. This includes the alert code, alert type, and alert message.
     */
    public function __construct(
        public ?RequestedPackageLineItem $requestedpackageLineItem = null,
        public ?array $alerts = null,
    ) {}
}
