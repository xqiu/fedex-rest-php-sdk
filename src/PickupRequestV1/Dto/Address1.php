<?php

declare(strict_types=1);

namespace ShipStream\FedEx\PickupRequestV1\Dto;

use ShipStream\FedEx\Dto;

final class Address1 extends Dto
{
	/**
	 * @param ?string[] $streetLines This is a combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included.<br>Example: [\"10 FedEx Parkway\", \"Suite 302\"]
	 * @param ?string $city Conditional<br>The name of city, town, etc.<br> Example: Memphis
	 * @param ?string $stateOrProvinceCode This is state or province code. Maximum length is 2.<br> Example: ON <br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
	 * @param ?string $postalCode Specify the postal code. This is optional for non postal-aware countries. Maximum length is 10.<br> Example: 38017<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
	 * @param ?string $countryCode The two-letter code used to identify a country. Maximum length is 2.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
	 * @param ?bool $residential Indicates whether this address is residential (as opposed to commercial).
	 * @param ?string $addressClassification Classifies a given address as either of unknown, residential, mixed or business.
	 */
	public function __construct(
		public readonly ?array $streetLines = null,
		public readonly ?string $city = null,
		public readonly ?string $stateOrProvinceCode = null,
		public readonly ?string $postalCode = null,
		public readonly ?string $countryCode = null,
		public readonly ?bool $residential = null,
		public readonly ?string $addressClassification = null,
	) {
	}
}
