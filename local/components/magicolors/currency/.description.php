<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentDescription = array(
    "NAME" => GetMessage("Текущая валюта"),
    "DESCRIPTION" => GetMessage("Выводим текущую валюту"),
    "PATH" => array(
        "ID" => "magicolors",
        "CHILD" => array(
            "ID" => "currency",
            "NAME" => "Текущая валюта"
        )
    ),
    "NAME" => 'Вывести валюту',
);
?>
