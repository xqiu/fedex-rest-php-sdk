<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class EmailLabelDetail extends Dto
{
    protected static array $complexArrayTypes = ['recipients' => EmailRecipient::class];

    /**
     * @param  EmailRecipient[]|null  $recipients  This is Email label recipient email address, shipment role, & language locale details. Atleast one entry must be specified.
     * @param  ?string  $message  This is an optional personalized message to be included in the email to the recipient.
     */
    public function __construct(
        public ?array $recipients = null,
        public ?string $message = null,
    ) {}
}
