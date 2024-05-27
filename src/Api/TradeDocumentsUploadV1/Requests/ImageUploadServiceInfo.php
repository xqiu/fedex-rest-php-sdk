<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TradeDocumentsUploadV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasMultipartBody;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Dto\FullSchemaImageUploadServiceInputVo;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\TradeDocumentsUploadV1\Responses\ImageUploadServiceOutputVo;
use ShipStream\FedEx\Request;

/**
 * Image Upload Service Info
 *
 * Use this endpoint to upload customized Company Letterhead/Logo and Digital signature images which
 * can be used in the FedEx generated paperwork or reports.<br><i>Note: FedEx APIs do not support
 * Cross-Origin Resource Sharing (CORS) mechanism.<i>
 */
class ImageUploadServiceInfo extends Request implements HasBody
{
    use HasMultipartBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchemaImageUploadServiceInputVo  $fullSchemaImageUploadServiceInputVo  The request elements to upload image files.
     */
    public function __construct(
        public FullSchemaImageUploadServiceInputVo $fullSchemaImageUploadServiceInputVo,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/documents/v1/lhsimages/upload';
    }

    public function createDtoFromResponse(Response $response): ImageUploadServiceOutputVo|ErrorResponseVo
    {
        $status = $response->status();
        $responseCls = match ($status) {
            201 => ImageUploadServiceOutputVo::class,
            400, 401, 403, 404, 500, 503 => ErrorResponseVo::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaImageUploadServiceInputVo->toArray();
    }
}
