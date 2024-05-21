<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class Contact extends Dto
{
    /**
     * @param  ?string  $personName  Specify contact person name.<br>Recommended length is 70. <br><br>Note: There's no specific validation for the person name.<br> Example: John Taylor
     * @param  ?string  $emailAddress  Specify contact email address. Maximum length is 80. <br> Example: sample@company.com
     * @param  ?string  $phoneNumber  Specify contact phone number. <br><br>Minimum length is 10 and supports maximum of 15 for certain countries using longer phone numbers. <br>Note: Recommended Maximum length is 15 and there's no specific validation will be done for the phone number. <br> Example: 918xxxxx890
     * @param  ?string  $phoneExtension  Specify contact phone extension. <br>Note: Recommended length is 6. There's no specific validation for the phone extension. <br> Example: 1234
     * @param  ?string  $faxNumber  Specify contact fax number.<br>Note: Recommended length is 15. There's no specific validation for the fax number.<br> Example: 1234567890
     * @param  ?string  $companyName  Specify contact company name.<br><br>Recommended length is 35.<br><br>Note: There's no specific validation for the company name.
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
