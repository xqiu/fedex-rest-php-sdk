<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\FreightLTLV1\Dto;

use ShipStream\FedEx\Dto;

final class PartyContact1 extends Dto
{
    /**
     * @param  ?string  $personName  Specify contact name. Maximum length is 70. <br> Example: John Taylor
     * @param  ?string  $emailAddress  Specify contact email address. Maximum length is 80. <br> Example: sample@company.com
     * @param  ?string  $phoneExtension  Specify contact phone extension. Maximum length is 6. <br> Example: 1234
     * @param  ?string  $phoneNumber  Specify contact phone number. <br><br>Minimum length is 10 and supports Maximum as 15 for certain countries using longer phone numbers. <br>Note: Recommended Maximum length is 15 and there's no specific validation will be done for the phone number. <br> Example: 918xxxxx890
     * @param  ?string  $companyName  Specify contact company name.<br><br>Recommended length is 35.<br><br>Note: There's no specific validation for the company name.
     * @param  ?string  $faxNumber  Specify contact person's fax number. Maximum length is 15.
     */
    public function __construct(
        public readonly ?string $personName = null,
        public readonly ?string $emailAddress = null,
        public readonly ?string $phoneExtension = null,
        public readonly ?string $phoneNumber = null,
        public readonly ?string $companyName = null,
        public readonly ?string $faxNumber = null,
    ) {
    }
}
