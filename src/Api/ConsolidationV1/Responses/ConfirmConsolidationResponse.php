<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ConsolidationV1\Responses;

use ShipStream\FedEx\Api\ConsolidationV1\Dto\ConfirmConsolidationOutputVo;
use ShipStream\FedEx\Response;

final class ConfirmConsolidationResponse extends Response
{
    /**
     * @param  ?ConfirmConsolidationOutputVo  $output  The response elements received when a shipment is created.
     */
    public function __construct(
        public readonly ?ConfirmConsolidationOutputVo $output = null,
    ) {}
}
