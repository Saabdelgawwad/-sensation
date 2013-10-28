<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'KSD.' . $_EXTKEY,
	'Ksddc',
	array(
		'Person' => 'new, create, edit, update, delete',
		'Order' => 'new, create',
		
	),
	// non-cacheable actions
	array(
		'Person' => 'create, update, delete',
		'Order' => 'create',
		
	)
);

?>