<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$arComponentDescription = array(
    "NAME" => Loc::getMessage("CURRENT_CURRENCY"),
    "DESCRIPTION" => Loc::getMessage("VIEW_CURRENT_CURRENCY"),
    "PATH" => array(
        "ID" => "magicolors",
        "CHILD" => array(
            "ID" => "currency",
            "NAME" => Loc::getMessage("CURRENT_CURRENCY")
        )
    ),
    "NAME" => Loc::getMessage("NAME_CURRENCY"),
);
?>
