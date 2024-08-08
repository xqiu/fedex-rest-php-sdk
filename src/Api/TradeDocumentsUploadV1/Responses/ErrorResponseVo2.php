<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Responses;

use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto\CxsError;
use ShipStream\FedEx\Response;

final class ErrorResponseVo2 extends Response
{
    protected static array $complexArrayTypes = ['errors' => CxsError::class];

    /**
     * @param  ?string  $customerTransactionId  This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply.
     * @param  ?string  $transactionId  The transaction ID is a special set of numbers that defines each transaction.
     * @param  CxsError[]|null  $errors
     */
    public function __construct(
        public readonly ?string $customerTransactionId = null,
        public readonly ?string $transactionId = null,
        public readonly ?array $errors = null,
    ) {
    }
}
