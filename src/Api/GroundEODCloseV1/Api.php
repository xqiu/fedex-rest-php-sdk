<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GroundEODCloseV1;

use Saloon\Http\Response;
use ShipStream\FedEx\Api\GroundEODCloseV1\Dto\FullSchemaGeodPut;
use ShipStream\FedEx\Api\GroundEODCloseV1\Dto\FullSchemaReprintPost;
use ShipStream\FedEx\Api\GroundEODCloseV1\Requests\GroundPerformEndOfDayClose;
use ShipStream\FedEx\Api\GroundEODCloseV1\Requests\PerformEndOfDayClose;
use ShipStream\FedEx\BaseResource;

class Api extends BaseResource
{
    public function groundPerformEndOfDayClose(FullSchemaGeodPut $fullSchemaGeodPut): Response
    {
        return $this->connector->send(new GroundPerformEndOfDayClose($fullSchemaGeodPut));
    }

    public function performEndOfDayClose(FullSchemaReprintPost $fullSchemaReprintPost): Response
    {
        return $this->connector->send(new PerformEndOfDayClose($fullSchemaReprintPost));
    }
}
