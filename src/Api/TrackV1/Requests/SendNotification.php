<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use ShipStream\FedEx\Api\TrackV1\Dto\FullSchemaNotification;
use ShipStream\FedEx\Api\TrackV1\Responses\ErrorResponseVo;
use ShipStream\FedEx\Api\TrackV1\Responses\ErrorResponseVo2;
use ShipStream\FedEx\Api\TrackV1\Responses\TrkcResponseVoNotifications;
use ShipStream\FedEx\Request;

/**
 * Send Notification
 *
 * This endpoint helps you setup up, customize the tracking event notifications to be received for a
 * shipment.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
 */
class SendNotification extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  FullSchemaNotification  $fullSchemaNotification  The request to receive a tracking notification.
     */
    public function __construct(
        public FullSchemaNotification $fullSchemaNotification,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/track/v1/notifications';
    }

    public function createDtoFromResponse(
        Response $response,
    ): TrkcResponseVoNotifications|ErrorResponseVo|ErrorResponseVo2 {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => TrkcResponseVoNotifications::class,
            400, 500 => ErrorResponseVo::class,
            401, 403, 404, 503 => ErrorResponseVo2::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fullSchemaNotification->toArray();
    }
}
