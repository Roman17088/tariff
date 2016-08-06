<?php
namespace Tariff;

abstract class OptionAbstract implements OptionInterface
{
    protected $companyID = 0;
    protected $symbolCode = '';
    protected $arTariff = array();
    protected $arCompany = array();

    /**
     * Получим тариф компании
     */
    protected function getTariff()
    {
        /**
         * API bitrix
         * Получаем из свойства компании id тариф и если все прошло удачно, то и сам тариф
         */
        $arCompany = $this->getCompany();
        if (empty($arCompany)) {
            return false;
        }
        $this->arCompany = $arCompany;
        $tariffID = (int)$this->arCompany['UF_TARIFF'];
        if (!$tariffID) {
            return false;
        }
        $cElem = new CIBlockElement;
        $arTariff = $cElem->GetByID($tariffID)->Fetch();
        if (empty($arTariff)) {
            return false;
        }
        $this->arTariff = json_decode($arTariff['DETAIL_TEXT'], true);
        echo "get tariff\n";
        return true;
    }

    /**
     * Получим информацию о компании
     *
     * @return array
     */
    protected function getCompany()
    {
        /**
         * API bitrix
         */
        $cSect = new CIBlockSection;
        $arFilter = array(
            'IBLOCK_ID' => CFG::IB_COMPANIES,
            'ID' => $this->companyID,
        );
        $result = $cSect->GetList(array('sort' => 'asc'), $arFilter, false, array('UF_*'))->Fetch();
        return $result;
    }

    /**
     * Получим ID компании
     *
     * @return bool
     */
    public function getCompanyID()
    {
        return $this->companyID;
    }

    /**
     * Получим символьный код опции
     *
     * @return string
     */
    public function getSymbolCode()
    {
        return $this->symbolCode;
    }

    /**
     * Включена ли опция в тарифе
     *
     * @return bool
     */
    public function hasOption()
    {
        return (bool)$this->arTariff[ $this->symbolCode ];
    }
}