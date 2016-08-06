<?php
namespace Tariff;
use \Exception;

// сделано для Bitrix
use \CModule;
CModule::IncludeModule('iblock');

class OptionBase extends OptionAbstract implements OptionInterface
{
    public function __construct($companyID)
    {
        $this->companyID = (int)$companyID;
        if (!$this->companyID) {
            throw new Exception('Не указан ID компании');
        }
        $this->getTariff();
    }

}