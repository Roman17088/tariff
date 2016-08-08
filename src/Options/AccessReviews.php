<?php
namespace Tariff\Options;

use Tariff\OptionBase;

class AccessReviews extends OptionBase
{
    public function __construct($companyID)
    {
        $this->symbolCode = 'access_reviews';
        parent::__construct($companyID);
    }
}