<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\GroundEODCloseV1\Dto;

use ShipStream\FedEx\Dto;

final class FullSchemaReprintPost extends Dto
{
    /**
     * @param  ?string  $closeReqType  Specify the close request type to initiate processing of shipment data.For ground close the closeReqType is GCDR and for Reprint EndofDay the applicable value is RGCDR.
     * @param  ?CloseAccountNumber  $accountNumber  The account number for closing the  shipment.
     * @param  ?string  $groundServiceCategory  This is to specify FedEx ground category for which the shipment to be submitted for end of the day closing.
     * @param  ?string  $closeDate  Indicates the close date. <br> Example: 2020-05-05
     * @param  ?string  $trackingNumber  Specify the tracking number for reprinting the report.It is only applicable for reprint EndofDay and its not applicable for ground EndofDay close endpoint. <br> Example: 7XX96XX42946
     * @param  ?string  $reprintOption  Specify the reprint option to generate report. Either by close date or a tracking number.It is only applicable for reprint EndofDay and its not applicable for ground EndofDay close endpoint.
     * @param  ?CloseDocumentSpecification  $closeDocumentSpecification  Specifies characteristics of the document to be returned for this request.
     */
    public function __construct(
        public readonly ?string $closeReqType = null,
        public readonly ?CloseAccountNumber $accountNumber = null,
        public readonly ?string $groundServiceCategory = null,
        public readonly ?string $closeDate = null,
        public readonly ?string $trackingNumber = null,
        public readonly ?string $reprintOption = null,
        public readonly ?CloseDocumentSpecification $closeDocumentSpecification = null,
    ) {
    }
}
