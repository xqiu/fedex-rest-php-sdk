<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class RateRequestControlParameters extends Dto
{
    /**
     * @param  ?bool  $returnTransitTimes  Indicate if the transit time and commit data are to be returned in the reply. Default value is false.<br>Valid values are TRUE and FALSE.
     * @param  ?bool  $servicesNeededOnRateFailure  Specify the services to be requested if the rate data is not available.<br>Valid values are TRUE and FALSE.
     * @param  ?string  $variableOptions  Specify service options whose combinations are to be considered when replying with available services.
     * @param  ?string  $rateSortOrder  This is a sort order you can specify to control the order of the response data: <br> Example: <ul><li>SERVICENAMETRADITIONAL - data in order of highest to lowest service (Default)</li><li>COMMITASCENDING - data in order of ascending delivery committment</li><li>COMMITDESCENDING - data in order of descending delivery committment.</li></ul>
     */
    public function __construct(
        public readonly ?bool $returnTransitTimes = null,
        public readonly ?bool $servicesNeededOnRateFailure = null,
        public readonly ?string $variableOptions = null,
        public readonly ?string $rateSortOrder = null,
    ) {
    }
}
