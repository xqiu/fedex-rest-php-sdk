<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\PostalCodeValidationV1;

use Saloon\Http\Response;
use ShipStream\FedEx\Api\PostalCodeValidationV1\Dto\FullSchemaValidatePostal;
use ShipStream\FedEx\Api\PostalCodeValidationV1\Requests\ValidatePostal;
use ShipStream\FedEx\BaseResource;

class Api extends BaseResource
{
    /**
     * @param  FullSchemaValidatePostal  $fullSchemaValidatePostal  The request elements for validating a postal code.
     */
    public function validatePostal(FullSchemaValidatePostal $fullSchemaValidatePostal): Response
    {
        return $this->connector->send(new ValidatePostal($fullSchemaValidatePostal));
    }
}
