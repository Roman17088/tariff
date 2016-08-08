<?php
namespace Tariff\Options;

use Tariff\OptionBase;

class Recommended extends OptionBase
{
    public function __construct($companyID)
    {
        $this->symbolCode = 'recommended';
        parent::__construct($companyID);
    }
}