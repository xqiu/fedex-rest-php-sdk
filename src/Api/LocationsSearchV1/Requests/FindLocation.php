<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\LocationsSearchV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\LocationsSearchV1\Dto\FullSchemaFindLocation;
use ShipStream\FedEx\Api\LocationsSearchV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\LocationsSearchV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\LocationsSearchV1\Responses\LoccResponseVo;
use ShipStream\FedEx\Request;

/**
 * Find Location
 *
 * Use this endpoint to search for nearest FedEx locations by address, geographicccc coordinates, or
 * phone numberrrr. You can also narrow your search by type of location and services offered. It
 * returns up to 75 locations within a 50-mile radius for the address used in the search criteria.
 * Results are based on current date and time. Supports all FedEx operating companies and countries,
 * dependent upon being able to get a valid geolocation for a given set of criteria.<br><i>Note: You
 * must specify landline numbers only, when searching for the nearest FedEx locations using phone
 * number.</i><br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS)
 * mechanism.</i>
 */
class FindLocation extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        public FullSchemaFindLocation $fullSchemaFindLocation,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/location/v1/locations';
    }

    public function createDtoFromResponse(Response $response): LoccResponseVo|ErrorResponseVo|ErrorResponseVo2
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => LoccResponseVo::class,
            400, 500 => ErrorResponseVo::class,
            401, 403, 404, 503 => ErrorResponseVo2::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaFindLocation->toArray();
    }
}
