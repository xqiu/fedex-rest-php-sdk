<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\ShipV1\Dto;

use ShipStream\FedEx\Dto;

final class CustomsOptionDetail extends Dto
{
    /**
     * @param  ?string  $description  Specify additional description about customs options. This is a required field when the Type is OTHER.
     * @param  ?string  $type  Specify the reason for a global return, as recognized by Customs. Valid values:<ul><li>COURTESY_RETURN_LABEL: Applicable for Outbound shipments.</li><li>EXHIBITION_TRADE_SHOW: For exhibition or trade-show, outbound and inbound.</li><li>FAULTY_ITEM: For faulty item being returned, inbound only.</li><li>FOLLOWING_REPAIR: For repaired or processed item being sent, outbound only.</li><li>FOR_REPAIR: For repair or processing, outbound and inbound.</li><li>ITEM_FOR_LOAN: For loan item, outbound and inbound.</li><li>OTHER: Other reason, outbound and inbound. This type requires a description.</li><li>REJECTED: For rejected merchandise being returned, inbound.</li><li>REPLACEMENT: For replacement being sent, outbound only.</li><li>TRIAL: For use in a trial, outbound and inbound.</li></ul>
     */
    public function __construct(
        public readonly ?string $description = null,
        public readonly ?string $type = null,
    ) {
    }
}
