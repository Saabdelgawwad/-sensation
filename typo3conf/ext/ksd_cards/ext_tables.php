<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Ksddc',
	'KSD Tageskarten'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'KSD Tageskarten');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ksdcards_domain_model_person', 'EXT:ksd_cards/Resources/Private/Language/locallang_csh_tx_ksdcards_domain_model_person.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ksdcards_domain_model_person');
$TCA['tx_ksdcards_domain_model_person'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:ksd_cards/Resources/Private/Language/locallang_db.xlf:tx_ksdcards_domain_model_person',
		'label' => 'surname',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'surname,lastname,address,postcode,location,email,phone,note,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Person.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_ksdcards_domain_model_person.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ksdcards_domain_model_order', 'EXT:ksd_cards/Resources/Private/Language/locallang_csh_tx_ksdcards_domain_model_order.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ksdcards_domain_model_order');
$TCA['tx_ksdcards_domain_model_order'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:ksd_cards/Resources/Private/Language/locallang_db.xlf:tx_ksdcards_domain_model_order',
		'label' => 'datetime',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'datetime,amount,status,person_i_d,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Order.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_ksdcards_domain_model_order.gif'
	),
);

// Include Flexform
$extensionName = t3lib_div::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature_Pi1 = strtolower($extensionName) . '_ksddc';

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature_Pi1] = 'layout,select_key,recursive';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature_Pi1] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($pluginSignature_Pi1, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_ds.xml'); 
?>