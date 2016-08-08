<?php
namespace Tariff\Options;

use Tariff\OptionBase;

class AccessNews extends OptionBase
{
    public function __construct($companyID)
    {
        $this->symbolCode = 'access_news';
        parent::__construct($companyID);
    }
}