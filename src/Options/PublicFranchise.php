<?php
namespace Tariff\Options;

use Tariff\OptionBase;

class PublicFranchise extends OptionBase
{
    public function __construct($companyID)
    {
        $this->symbolCode = 'public_franchise';
        parent::__construct($companyID);
    }
}