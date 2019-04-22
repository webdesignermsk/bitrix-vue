<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

class VueBitrix extends CBitrixComponent
{
    public function executeComponent()
    {
        \Bitrix\Main\UI\Extension::load("ui.vue");
        
        $this->includeComponentTemplate();
    }

}