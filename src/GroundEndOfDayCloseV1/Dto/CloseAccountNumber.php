<?php

declare(strict_types=1);

namespace ShipStream\FedEx\GroundEndOfDayCloseV1\Dto;

use ShipStream\FedEx\Dto;

final class CloseAccountNumber extends Dto
{
    /**
     * @param  ?string  $value  Conditional.<br> The account number value. Max Length is 9.<br>Example: 123456789
     */
    public function __construct(
        public readonly ?string $value = null,
    ) {
    }
}
