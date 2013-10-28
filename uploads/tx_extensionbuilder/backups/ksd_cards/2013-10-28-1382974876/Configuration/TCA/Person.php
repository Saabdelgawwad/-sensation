<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_ksdcards_domain_model_person'] = array(
	'ctrl' => $TCA['tx_ksdcards_domain_model_person']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, surname, lastname, address, postcode, location, email, phone, note',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, surname, lastname, address, postcode, location, email, phone, note,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_ksdcards_domain_model_person',
				'foreign_table_where' => 'AND tx_ksdcards_domain_model_person.pid=###CURRENT_PID### AND tx_ksdcards_domain_model_person.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'surname' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ksd_cards/Resources/Private/Language/locallang_db.xlf:tx_ksdcards_domain_model_person.surname',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'lastname' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ksd_cards/Resources/Private/Language/locallang_db.xlf:tx_ksdcards_domain_model_person.lastname',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'address' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ksd_cards/Resources/Private/Language/locallang_db.xlf:tx_ksdcards_domain_model_person.address',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'postcode' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ksd_cards/Resources/Private/Language/locallang_db.xlf:tx_ksdcards_domain_model_person.postcode',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
		'location' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ksd_cards/Resources/Private/Language/locallang_db.xlf:tx_ksdcards_domain_model_person.location',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'email' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ksd_cards/Resources/Private/Language/locallang_db.xlf:tx_ksdcards_domain_model_person.email',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'phone' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ksd_cards/Resources/Private/Language/locallang_db.xlf:tx_ksdcards_domain_model_person.phone',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'note' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:ksd_cards/Resources/Private/Language/locallang_db.xlf:tx_ksdcards_domain_model_person.note',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
	),
);

?>