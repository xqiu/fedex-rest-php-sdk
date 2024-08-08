<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class PackageOperationalDetail extends Dto
{
    protected static array $complexArrayTypes = ['operationalInstructions' => OperationalInstructions::class];

    /**
     * @param  ?string  $astraHandlingText  This is human-readable astra handling text.
     * @param  ?PackageBarcodes  $barcodes  These are package barcode details. Each instance of this data type represents the set of barcodes (of all types) which are associated with a specific package.
     * @param  OperationalInstructions[]|null  $operationalInstructions  These are operational instruction such as Ground Information printed on a given area of the label, one-dimensional barcode with only x-axis that contains the details of the shipment in encrypted form, SECURED or UNSECURED.
     */
    public function __construct(
        public readonly ?string $astraHandlingText = null,
        public readonly ?PackageBarcodes $barcodes = null,
        public readonly ?array $operationalInstructions = null,
    ) {
    }
}
