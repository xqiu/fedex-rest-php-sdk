<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaModifyOpenShipment extends Dto
{
    /**
     * @param  string  $index  This is a unique value assigned to the already created Open Shipment. If this isn’t available then provide the master tracking number.<br>Example: Test1234
     * @param  OpenshipmentRequestedShipment  $requestedShipment  The detailed transaction data for the requested Open Shipment.
     * @param  mixed[]  $accountNumber  The account number associated with the shipment. <br>Example: Your account number
     * @param  ?string  $openShipmentAction  Indicates the optional actions that can be performed during the modification of packages in  Open Shipment.<p>Here are the values:<ul><li>CREATE_PACKAGE - Use CREATE_PACKAGE option to create Open Shipment.</li><li>STRONG_VALIDATION – Full shipment edits: any edit that fails will cause the transaction to fail. If the transaction is successful, a tracking number may be returned and the transaction will be saved to the database (committed).</li><li>WEAK_VALIDATION - Full shipment edits: any edit that fails will return errors but the transaction does not fail. The tracking number is returned and the transaction is saved in the database if the core edits are passed. Fix errors with the ModifyRequests transaction using the Index and returned tracking number.</li></ul></p>
     */
    public function __construct(
        public readonly string $index,
        public readonly OpenshipmentRequestedShipment $requestedShipment,
        public readonly array $accountNumber,
        public readonly ?string $openShipmentAction = null,
    ) {
    }
}
