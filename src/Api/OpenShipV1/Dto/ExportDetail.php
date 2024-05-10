<?php

declare(strict_types=1);

namespace ShipStream\FedEx\Api\OpenShipV1\Dto;

use ShipStream\FedEx\Dto;

final class ExportDetail extends Dto
{
    protected static array $attributeMap = ['b13aFilingOption' => 'b13AFilingOption'];

    /**
     * @param  ?DestinationControlDetail  $destinationControlDetail  Use this object to specify the appropriate destination control statement type(s). Also make sure to specify destination country and end user.
     * @param  ?string  $b13aFilingOption  Specify the filing option being exercised. Required for  non-document shipments originating in Canada destinated for any country other than Canada, the United States, Puerto Rico, or the U.S. Virgin Islands.
     * @param  ?string  $exportComplianceStatement  For US export shipments requiring an EEI, enter the ITN number received from AES when you filed your shipment or the FTR (Foreign Trade Regulations) exemption number.The proper format for an ITN number is AES XYYYYMMDDNNNNNN where YYYYMMDD is date and NNNNNN are numbers generated by the AES.<br> Example: AESX20220714987654<br>Note: The ITN or FTR exemption number you submit in the ship request prints on the international shipping label.<br><br>For CA export shipments,it can be Proof of report number(15-32 alphanumeric) ,Summary proof of report number(7-32 alphanumeric) or Exemption number(2 digit) based on the selected b13AFilingOption.<br>Example: 98765432107654321(POR number), 7654321(Summary POR number) and 02(Exemption number).<br>For FTR exemption number you need provide a predefined value as NO_EEI_30_37_A.
     * @param  ?string  $permitNumber  This is a Permit Number. This field is applicable only to Canada export non-document shipments of any value to any destination. No special characters are allowed.<br> Example: 12345
     */
    public function __construct(
        public readonly ?DestinationControlDetail $destinationControlDetail = null,
        public readonly ?string $b13aFilingOption = null,
        public readonly ?string $exportComplianceStatement = null,
        public readonly ?string $permitNumber = null,
    ) {
    }
}
