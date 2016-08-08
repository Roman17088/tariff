<?php
namespace Tariff\Options;

use Tariff\OptionBase;

class ShowMobile extends OptionBase
{
    public function __construct($companyID)
    {
        $this->symbolCode = 'show_mobile';
        parent::__construct($companyID);
    }
}