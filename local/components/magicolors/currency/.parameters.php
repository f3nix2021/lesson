<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Loader;
if (!Loader::includeModule('crm')) {
    return;
}

$by = "name";
$order = "asc";

$rawCurrency = \CCurrency::GetList(
    $by,
    $order,
);

while ($curr = $rawCurrency ->fetch()) {
    $listCurrency[$curr['CURRENCY']] = $curr['CURRENCY'];
}

$arComponentParameters = array(
    "GROUPS" => array(),
    "PARAMETERS" => array(
        "TEMPLATE_FOR_CURRENCY" => array(
            "PARENT" => "BASE",
            "NAME" => "Выбрать валюту",
            "TYPE" => "LIST",
            "MULTIPLE" => "N",
            "VALUES" => $listCurrency,
        ),
    ),
);
?>