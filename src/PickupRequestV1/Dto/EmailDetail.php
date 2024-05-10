<?php

declare(strict_types=1);

namespace ShipStream\FedEx\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class EmailDetail extends Dto
{
    /**
     * @param  ?string  $address  Specify the email address.<br>Example: sample@gmail.com
     * @param  ?string  $locale  Specify the language in which the email needs to be sent.Default value is en_US.<br>Example: en_US. .<br><a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     */
    public function __construct(
        public readonly ?string $address = null,
        public readonly ?string $locale = null,
    ) {
    }
}
