<?php
namespace Tariff;

interface OptionInterface
{
    public function getCompanyID();

    public function getSymbolCode();

    public function hasOption();
}