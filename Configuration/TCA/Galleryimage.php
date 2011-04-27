<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_tlphotoblog_domain_model_galleryimage'] = array(
	'ctrl' => $TCA['tx_tlphotoblog_domain_model_galleryimage']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'name,image'
	),
	'types' => array(
		'1' => array('showitem' => 'name,image')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_tlphotoblog_domain_model_galleryimage',
				'foreign_table_where' => 'AND tx_tlphotoblog_domain_model_galleryimage.uid=###REC_FIELD_l18n_parent### AND tx_tlphotoblog_domain_model_galleryimage.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array(
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array(
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'name' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:tl_photoblog/Resources/Private/Language/locallang_db.xml:tx_tlphotoblog_domain_model_galleryimage.name',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'image' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:tl_photoblog/Resources/Private/Language/locallang_db.xml:tx_tlphotoblog_domain_model_galleryimage.image',
			'config' => Array (
				'type' => 'group',
				'internal_type' => 'file',
				'allowed' => 'gif,png,jpg,jpeg',
				'max_size' => '800',
				'uploadfolder' => 'uploads/tx_tlphotoblog',
				'show_thumbs' => '1',
				'size' => '5',
				'maxitems' => '10',
				'minitems' => '0'
			)
		),
	),
);
?>