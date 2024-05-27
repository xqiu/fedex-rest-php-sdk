<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\RatesAndTransitTimesV1\Dto;

use ShipStream\FedEx\Dto;

final class Contact extends Dto
{
    /**
     * @param  ?string  $personName  Specify contact name.<br>Note: Recommended Length is 70. There's no specific validation for the length.<br> Example: John Taylor
     * @param  ?string  $emailAddress  Specify contact email address. Maximum length is 80. <br> Example: sample@company.com
     * @param  ?string  $phoneNumber  Specify contact phone number. Maximum length is 15. <br> Example: 1234567890
     * @param  ?string  $phoneExtension  Specify contact phone extension. Maximum length is 6. <br> Example: 1234
     * @param  ?string  $faxNumber  Specify contact fax number. Maximum length is 15. <br> Example: 1234567890
     * @param  ?string  $companyName  Specify contact company name. Maximum length is 35.
     */
    public function __construct(
        public readonly ?string $personName = null,
        public readonly ?string $emailAddress = null,
        public readonly ?string $phoneNumber = null,
        public readonly ?string $phoneExtension = null,
        public readonly ?string $faxNumber = null,
        public readonly ?string $companyName = null,
    ) {
    }
}
