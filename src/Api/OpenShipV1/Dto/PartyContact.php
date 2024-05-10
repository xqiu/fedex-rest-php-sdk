<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class PartyContact extends Dto
{
    /**
     * @param  string  $phoneNumber  Specify contact phone number. <br><br>Minimum length is 10 and supports Maximum as 15 for certain countries using longer phone numbers. <br>Note: Recommended Maximum length is 15 and there's no specific validation will be done for the phone number. <br> Example: 918xxxxx890
     * @param  ?string  $personName  Specify contact name. Maximum length is 70. <br>Note: Either the companyName or personName is mandatory.<br> Example: John Taylor
     * @param  ?string  $emailAddress  Specify contact email address. Maximum length is 80. <br> Example: sample@company.com
     * @param  ?string  $phoneExtension  Specify contact phone extension. Maximum length is 6. <br> Example: 1234
     * @param  ?string  $companyName  Specify contact company name. Maximum length is 35. <br>Note: Either the companyName or personName is mandatory.
     */
    public function __construct(
        public readonly string $phoneNumber,
        public readonly ?string $personName = null,
        public readonly ?string $emailAddress = null,
        public readonly ?string $phoneExtension = null,
        public readonly ?string $companyName = null,
    ) {
    }
}
