<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_tlphotoblog_domain_model_comment'] = array(
	'ctrl' => $TCA['tx_tlphotoblog_domain_model_comment']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'name,email,website,comment,crdate'
	),
	'types' => array(
		'1' => array('showitem' => 'name,email,website,comment,crdate')
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
		'crdate' => Array (
            'exclude' => 0,
            'label' => 'Creation date',
            'config' => Array (
                'type' => 'none',
                'format' => 'date',
                'eval' => 'date',

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
				'foreign_table' => 'tx_tlphotoblog_domain_model_comment',
				'foreign_table_where' => 'AND tx_tlphotoblog_domain_model_comment.uid=###REC_FIELD_l18n_parent### AND tx_tlphotoblog_domain_model_comment.sys_language_uid IN (-1,0)',
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
			'label'   => 'LLL:EXT:tl_photoblog/Resources/Private/Language/locallang_db.xml:tx_tlphotoblog_domain_model_comment.name',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'email' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:tl_photoblog/Resources/Private/Language/locallang_db.xml:tx_tlphotoblog_domain_model_comment.email',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'website' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:tl_photoblog/Resources/Private/Language/locallang_db.xml:tx_tlphotoblog_domain_model_comment.website',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'comment' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:tl_photoblog/Resources/Private/Language/locallang_db.xml:tx_tlphotoblog_domain_model_comment.comment',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
	),
);
?>
