<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1;

use Saloon\Http\Response;
use ShipStream\FedEx\Api\FreightLTLV1\Dto\FullSchema;
use ShipStream\FedEx\Api\FreightLTLV1\Dto\FullSchemaCancelFreightPickup;
use ShipStream\FedEx\Api\FreightLTLV1\Dto\FullSchemaCreatePickup;
use ShipStream\FedEx\Api\FreightLTLV1\Dto\FullSchemaFreightPickupAvailability;
use ShipStream\FedEx\Api\FreightLTLV1\Dto\FullSchemaFreightShipment;
use ShipStream\FedEx\Api\FreightLTLV1\Requests\CancelFreightPickup;
use ShipStream\FedEx\Api\FreightLTLV1\Requests\CheckFreightPickupAvailability;
use ShipStream\FedEx\Api\FreightLTLV1\Requests\CreateFreightPickup;
use ShipStream\FedEx\Api\FreightLTLV1\Requests\FreightRateQuote;
use ShipStream\FedEx\Api\FreightLTLV1\Requests\FreightShipment;
use ShipStream\FedEx\BaseResource;

class Api extends BaseResource
{
    /**
     * @param  FullSchema  $fullSchema  The request elements for requesting a freight rate quote.
     */
    public function freightRateQuote(FullSchema $fullSchema): Response
    {
        return $this->connector->send(new FreightRateQuote($fullSchema));
    }

    /**
     * @param  FullSchemaFreightShipment  $fullSchemaFreightShipment  The request elements required to create a Freight2020Shipment.
     */
    public function freightShipment(FullSchemaFreightShipment $fullSchemaFreightShipment): Response
    {
        return $this->connector->send(new FreightShipment($fullSchemaFreightShipment));
    }

    /**
     * @param  FullSchemaFreightPickupAvailability  $fullSchemaFreightPickupAvailability  These are pickup availability request elements.
     */
    public function checkFreightPickupAvailability(
        FullSchemaFreightPickupAvailability $fullSchemaFreightPickupAvailability,
    ): Response {
        return $this->connector->send(new CheckFreightPickupAvailability($fullSchemaFreightPickupAvailability));
    }

    /**
     * @param  FullSchemaCreatePickup  $fullSchemaCreatePickup  The request elements to create a pickup.
     */
    public function createFreightPickup(FullSchemaCreatePickup $fullSchemaCreatePickup): Response
    {
        return $this->connector->send(new CreateFreightPickup($fullSchemaCreatePickup));
    }

    /**
     * @param  FullSchemaCancelFreightPickup  $fullSchemaCancelFreightPickup  This is a placeholder for cancelled pickup request elements.
     */
    public function cancelFreightPickup(FullSchemaCancelFreightPickup $fullSchemaCancelFreightPickup): Response
    {
        return $this->connector->send(new CancelFreightPickup($fullSchemaCancelFreightPickup));
    }
}
