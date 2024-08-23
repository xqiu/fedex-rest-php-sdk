<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GroundEODCloseV1\Dto;

use ShipStream\FedEx\Dto;

final class CloseDocumentSpecification extends Dto
{
    protected static array $attributeMap = ['op950detail' => 'op950Detail'];

    /**
     * @param  ?string[]  $closeDocumentTypes  Indicated the type of close documents requested by the caller. <br> Example: OP_950
     */
    public function __construct(
        public ?array $closeDocumentTypes = null,
        public ?Op950detail $op950detail = null,
    ) {}
}
