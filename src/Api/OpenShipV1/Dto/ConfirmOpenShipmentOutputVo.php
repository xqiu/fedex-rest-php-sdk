<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ConfirmOpenShipmentOutputVo extends Dto
{
    protected static array $complexArrayTypes = [
        'transactionShipments' => TransactionShipmentOutputVo::class,
        'alerts' => Alert::class,
    ];

    /**
     * @param  ?string  $jobId  Indicates the job under which the deferred shipment artifacts must be identified in the subsequent retrieval request. Example: abc123456
     * @param  TransactionShipmentOutputVo[]|null  $transactionShipments  These are shipping transaction details, such as master tracking number, service type, and ship date and time.
     * @param  Alert[]|null  $alerts  The alerts details received in the response.
     */
    public function __construct(
        public ?string $jobId = null,
        public ?array $transactionShipments = null,
        public ?array $alerts = null,
    ) {}
}
