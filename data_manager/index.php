<?php
namespace app\Models;

require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
/**
 * @var CMain $APPLICATION
 */
$APPLICATION->setTitle('Data manager');

use Models\HospitalClientsTable as Clients;

$collection = Clients::getList([
    'select' => [
        'id',
        'first_name',
        'last_name',
        'contact_id'
    ],
])->fetchCollection();

foreach ($collection as $key => $client) {
    echo $client->first_name;
}

require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php';