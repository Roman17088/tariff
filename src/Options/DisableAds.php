<?php
namespace Tariff\Options;

use Tariff\OptionBase;

class DisableAds extends OptionBase
{
    public function __construct($companyID)
    {
        $this->symbolCode = 'disable_ads';
        parent::__construct($companyID);
    }
}