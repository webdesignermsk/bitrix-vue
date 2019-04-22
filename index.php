<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Демонстрационная версия продукта «1С-Битрикс: Управление сайтом»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Смотрим возможности Vue в Bitrix");
?>

<?$APPLICATION->IncludeComponent("custom:vue-bitrix", ".default", Array())?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>