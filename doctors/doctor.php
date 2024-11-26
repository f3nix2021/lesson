<?php
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';

/**
 * @var CMain $APPLICATION
 */

$APPLICATION->setTitle('Доктор MOM');

use Bitrix\Main\Loader;
use Bitrix\Iblock\Iblock;
Loader::includeModule('iblock');

$iblockId = 19;
$iblockElementId = $_GET['id_doctor'];

$iblock = Iblock::wakeUp($iblockId);
//$element = $iblock->getEntityDataClass()::getByPrimary($iblockElementId)->fetchObject();

$element = $iblock->getEntityDataClass()::getByPrimary(
    $iblockElementId,
    ['select' => ['NAME', 'LAST', 'FIRST', 'SURNAME', 'PROCEDURES']])
    ->fetchObject();

$fio = $element->get('LAST')->getValue().' '.$element->get('FIRST')->getValue().' '.$element->get('SURNAME')->getValue();
$procedures = $element->get('PROCEDURES');

echo "<h2 style='color: #666666'>".$fio."</h2>";
echo "<div>Процедуры:</div>";
//echo "<div>".$procedures."</div>";

require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php';