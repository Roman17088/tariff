<?php
namespace Tariff\Options;

use Tariff\OptionBase;

class PersonalManager extends OptionBase
{
    public function __construct($companyID)
    {
        $this->symbolCode = 'personal_manager';
        parent::__construct($companyID);
    }
}