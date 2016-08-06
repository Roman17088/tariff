<?php
namespace Tariff\Options;

use Tariff\OptionBase;

class OnlineOrder extends OptionBase
{
    public function __construct($companyID)
    {
        $this->symbolCode = 'online_order';
        parent::__construct($companyID);
    }
}