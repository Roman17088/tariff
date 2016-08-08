<?php
namespace Tariff\Options;

use Tariff\OptionBase;

class Rating extends OptionBase
{
    public function __construct($companyID)
    {
        $this->symbolCode = 'rating';
        parent::__construct($companyID);
    }
}