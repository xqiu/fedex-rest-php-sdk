<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1;

use Saloon\Http\Response;
use ShipStream\FedEx\Api\OpenShipV1\Dto\FullSchemaAddPackagesToOpenShipment;
use ShipStream\FedEx\Api\OpenShipV1\Dto\FullSchemaConfirmOpenShipment;
use ShipStream\FedEx\Api\OpenShipV1\Dto\FullSchemaCreateOpenShipment;
use ShipStream\FedEx\Api\OpenShipV1\Dto\FullSchemaDeleteOpenShipment;
use ShipStream\FedEx\Api\OpenShipV1\Dto\FullSchemaDeletePackagesFromOpenShipment;
use ShipStream\FedEx\Api\OpenShipV1\Dto\FullSchemaGetOpenShipmentResults;
use ShipStream\FedEx\Api\OpenShipV1\Dto\FullSchemaModifyOpenShipment;
use ShipStream\FedEx\Api\OpenShipV1\Dto\FullSchemaModifyPackageInOpenShipment;
use ShipStream\FedEx\Api\OpenShipV1\Dto\FullSchemaRetrieveOpenShipment;
use ShipStream\FedEx\Api\OpenShipV1\Dto\FullSchemaRetrievePackageInOpenShipment;
use ShipStream\FedEx\Api\OpenShipV1\Requests\AddOpenShipmentPackages;
use ShipStream\FedEx\Api\OpenShipV1\Requests\ConfirmOpenShipment;
use ShipStream\FedEx\Api\OpenShipV1\Requests\CreateOpenShipmentt;
use ShipStream\FedEx\Api\OpenShipV1\Requests\DeleteOpenShipment;
use ShipStream\FedEx\Api\OpenShipV1\Requests\DeleteOpenShipmentPackages;
use ShipStream\FedEx\Api\OpenShipV1\Requests\GetOpenShipmentResults;
use ShipStream\FedEx\Api\OpenShipV1\Requests\ModifyOpenShipment;
use ShipStream\FedEx\Api\OpenShipV1\Requests\ModifyOpenShipmentPackages;
use ShipStream\FedEx\Api\OpenShipV1\Requests\RetrieveOpenShipment;
use ShipStream\FedEx\Api\OpenShipV1\Requests\RetrieveOpenShipmentPackages;
use ShipStream\FedEx\BaseResource;

class Api extends BaseResource
{
    /**
     * @param  FullSchemaCreateOpenShipment  $fullSchemaCreateOpenShipment  The request elements required to create a Openshipment.
     */
    public function createOpenShipmentt(FullSchemaCreateOpenShipment $fullSchemaCreateOpenShipment): Response
    {
        return $this->connector->send(new CreateOpenShipmentt($fullSchemaCreateOpenShipment));
    }

    public function modifyOpenShipment(FullSchemaModifyOpenShipment $fullSchemaModifyOpenShipment): Response
    {
        return $this->connector->send(new ModifyOpenShipment($fullSchemaModifyOpenShipment));
    }

    public function confirmOpenShipment(FullSchemaConfirmOpenShipment $fullSchemaConfirmOpenShipment): Response
    {
        return $this->connector->send(new ConfirmOpenShipment($fullSchemaConfirmOpenShipment));
    }

    /**
     * @param  FullSchemaModifyPackageInOpenShipment  $fullSchemaModifyPackageInOpenShipment  The response elements received when a shipment is created.
     */
    public function modifyOpenShipmentPackages(
        FullSchemaModifyPackageInOpenShipment $fullSchemaModifyPackageInOpenShipment,
    ): Response {
        return $this->connector->send(new ModifyOpenShipmentPackages($fullSchemaModifyPackageInOpenShipment));
    }

    /**
     * @param  FullSchemaAddPackagesToOpenShipment  $fullSchemaAddPackagesToOpenShipment  The response elements received when a shipment is created.
     */
    public function addOpenShipmentPackages(
        FullSchemaAddPackagesToOpenShipment $fullSchemaAddPackagesToOpenShipment,
    ): Response {
        return $this->connector->send(new AddOpenShipmentPackages($fullSchemaAddPackagesToOpenShipment));
    }

    public function deleteOpenShipmentPackages(
        FullSchemaDeletePackagesFromOpenShipment $fullSchemaDeletePackagesFromOpenShipment,
    ): Response {
        return $this->connector->send(new DeleteOpenShipmentPackages($fullSchemaDeletePackagesFromOpenShipment));
    }

    public function retrieveOpenShipmentPackages(
        FullSchemaRetrievePackageInOpenShipment $fullSchemaRetrievePackageInOpenShipment,
    ): Response {
        return $this->connector->send(new RetrieveOpenShipmentPackages($fullSchemaRetrievePackageInOpenShipment));
    }

    public function deleteOpenShipment(FullSchemaDeleteOpenShipment $fullSchemaDeleteOpenShipment): Response
    {
        return $this->connector->send(new DeleteOpenShipment($fullSchemaDeleteOpenShipment));
    }

    public function retrieveOpenShipment(FullSchemaRetrieveOpenShipment $fullSchemaRetrieveOpenShipment): Response
    {
        return $this->connector->send(new RetrieveOpenShipment($fullSchemaRetrieveOpenShipment));
    }

    public function getOpenShipmentResults(FullSchemaGetOpenShipmentResults $fullSchemaGetOpenShipmentResults): Response
    {
        return $this->connector->send(new GetOpenShipmentResults($fullSchemaGetOpenShipmentResults));
    }
}
