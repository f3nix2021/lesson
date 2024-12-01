<?php
define('DEBUG_FILE_NAME', $_SERVER["DOCUMENT_ROOT"] .'/logs/'.date("Y-m-d").'.log');

if (file_exists(__DIR__ . '/classes/autoload.php')) {
    require_once __DIR__ . '/classes/autoload.php';
}

\Bitrix\Main\EventManager::getInstance()->addEventHandler('', 'PantColorOnAdd', ['\Otus\Highload\Handler', 'onColorAdd']);

// автолоадер проекта
include_once __DIR__ . '/../app/autoload.php';

// вывод данных
function pr($var, $type = false) {
    echo '<pre style="font-size:10px; border:1px solid #000; background:#FFF; text-align:left; color:#000;">';
    if ($type)
        var_dump($var);
    else
        print_r($var);
    echo '</pre>';
}

use Bitrix\Main\Loader;

Loader::registerAutoLoadClasses(null, [
    'Models\Lists\CarsPropertyValuesTable' => '/local/app/Models/Lists/CarsPropertyValuesTable.php',
    'Models\AbstractIblockPropertyValuesTable' => '/local/app/Models/AbstractIblockPropertyValuesTable.php',
]);


