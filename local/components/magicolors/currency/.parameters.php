<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Loader;
if (!Loader::includeModule('crm')) {
    return;
}

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

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
            "NAME" => Loc::getMessage("NAME_CURRENCY"),
            "TYPE" => "LIST",
            "MULTIPLE" => "N",
            "VALUES" => $listCurrency,
        ),
    ),
);
?>