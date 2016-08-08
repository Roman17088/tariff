<?php
namespace Tariff\Options;

use Tariff\OptionBase;

class CabinetCompany extends OptionBase
{
    public function __construct($companyID)
    {
        $this->symbolCode = 'cabinet_company';
        parent::__construct($companyID);
    }
}