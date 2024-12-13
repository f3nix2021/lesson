<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$nav = new \Bitrix\Main\UI\PageNavigation('report_list');
$nav->allowAllRecords(false)->setPageSize($arParams['NUM_PAGE'])->initFromUri();
$nav->setRecordCount($arResult['COUNT']);

//pr($arResult);
?>

<?

$APPLICATION->IncludeComponent(
	'bitrix:main.ui.filter',
	'',
	[
		'FILTER_ID' => 'report_list',
		'GRID_ID' => 'MY_GRID_ID',
		'FILTER' => [
			['id' => 'UF_NAME', 'name' => 'Имя', 'type' => 'string'],
			['id' => 'UF_LASTNAME', 'name' => 'Фамилия', 'type' => 'string'],
			['id' => 'UF_PHONE', 'name' => 'Телефон', 'type' => 'string'],
			['id' => 'UF_JOBPOSITION', 'name' => 'Должность', 'type' => 'string'],
		],
		'ENABLE_LIVE_SEARCH' => true,
		'ENABLE_LABEL' => true
	]
);

?>

<?
// здесь мы модключаем штатный компонет грид и передаем ему данные
$APPLICATION->includeComponent(
	"bitrix:main.ui.grid",
	"",
	[
		"GRID_ID" => "MY_GRID_ID",
		"COLUMNS" => $arResult['COLUMNS'],
		"ROWS" => $arResult['LISTS'],
		"NAV_OBJECT" => $nav,
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"SHOW_ROW_CHECKBOXES" =>$arResult['SHOW_ROW_CHECKBOXES'],
		"SHOW_SELECTED_COUNTER" => false,
		"SHOW_PAGESIZE" => false,
		
	]
);
?>
