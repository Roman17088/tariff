<?php
namespace Tariff\Options;

use Tariff\OptionBase;

class AccessPress extends OptionBase
{
    public function __construct($companyID)
    {
        $this->symbolCode = 'access_press';
        parent::__construct($companyID);
    }
}