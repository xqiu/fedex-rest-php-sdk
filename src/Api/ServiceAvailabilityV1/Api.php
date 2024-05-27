<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ServiceAvailabilityV1;

use Saloon\Http\Response;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto\FullSchemaPackageAndServiceOptions;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto\FullSchemaSpecialServiceOptions;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Dto\FullSchemaTransitTime;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Requests\GetPackageAndServiceOptions;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Requests\GetSpecialServiceOptions;
use ShipStream\FedEx\Api\ServiceAvailabilityV1\Requests\RetrieveServicesAndTransitTimes;
use ShipStream\FedEx\BaseResource;

class Api extends BaseResource
{
    /**
     * @param  FullSchemaTransitTime  $fullSchemaTransitTime  TransitTimeInputVO describes the details needed in order to get the transit times for a particular shipment.
     */
    public function retrieveServicesAndTransitTimes(FullSchemaTransitTime $fullSchemaTransitTime): Response
    {
        return $this->connector->send(new RetrieveServicesAndTransitTimes($fullSchemaTransitTime));
    }

    /**
     * @param  FullSchemaPackageAndServiceOptions  $fullSchemaPackageAndServiceOptions  These are the input elements for requesting package and service options.
     */
    public function getPackageAndServiceOptions(
        FullSchemaPackageAndServiceOptions $fullSchemaPackageAndServiceOptions,
    ): Response {
        return $this->connector->send(new GetPackageAndServiceOptions($fullSchemaPackageAndServiceOptions));
    }

    /**
     * @param  FullSchemaSpecialServiceOptions  $fullSchemaSpecialServiceOptions  The request elements for special service options availability.
     */
    public function getSpecialServiceOptions(FullSchemaSpecialServiceOptions $fullSchemaSpecialServiceOptions): Response
    {
        return $this->connector->send(new GetSpecialServiceOptions($fullSchemaSpecialServiceOptions));
    }
}
