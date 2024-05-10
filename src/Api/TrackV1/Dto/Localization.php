<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\TrackV1\Dto;

use ShipStream\FedEx\Dto;

final class Localization extends Dto
{
    /**
     * @param  string  $languageCode  Identifies two-letter code for the language (e.g. en/EN, fr/FR, es/ES etc..).<br> Example: en
     * @param  ?string  $localeCode  Identifies the two-letter code for the region, used to further identify the requested language.  for example, if you request Spanish, you must include a locale code of <i>US</i> for North American Spanish, or <i>MX</i> for Mexico. <br> Example: US<br><a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     */
    public function __construct(
        public readonly string $languageCode,
        public readonly ?string $localeCode = null,
    ) {
    }
}
