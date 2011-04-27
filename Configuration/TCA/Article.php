<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_tlphotoblog_domain_model_article'] = array(
	'ctrl' => $TCA['tx_tlphotoblog_domain_model_article']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'title,smallimage,image,text,category,comments,tags,galleryimage'
	),
	'types' => array(
		'1' => array('showitem' => 'title,smallimage,image,text;;2;richtext:rte_transform[flag=rte_enabled|mode=ts];4-4-4,category,comments,tags,galleryimage')
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
				'foreign_table' => 'tx_tlphotoblog_domain_model_article',
				'foreign_table_where' => 'AND tx_tlphotoblog_domain_model_article.uid=###REC_FIELD_l18n_parent### AND tx_tlphotoblog_domain_model_article.sys_language_uid IN (-1,0)',
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
		'title' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:tl_photoblog/Resources/Private/Language/locallang_db.xml:tx_tlphotoblog_domain_model_article.title',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'smallimage' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:tl_photoblog/Resources/Private/Language/locallang_db.xml:tx_tlphotoblog_domain_model_article.smallimage',
			'config' => Array (
				'type' => 'group',
				'internal_type' => 'file',
				'allowed' => 'gif,png,jpg,jpeg',
				'max_size' => '3000',
				'uploadfolder' => 'uploads/tx_tlphotoblog',
				'show_thumbs' => '1',
				'size' => '1',
				'maxitems' => '1',
				'minitems' => '0'
			)
		),
		'image' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:tl_photoblog/Resources/Private/Language/locallang_db.xml:tx_tlphotoblog_domain_model_article.image',
			'config' => Array (
				'type' => 'group',
				'internal_type' => 'file',
				'allowed' => 'gif,png,jpg,jpeg',
				'max_size' => '5000',
				'uploadfolder' => 'uploads/tx_tlphotoblog',
				'show_thumbs' => '1',
				'size' => '1',
				'maxitems' => '1',
				'minitems' => '0'
			)
		),
		'text' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:tl_photoblog/Resources/Private/Language/locallang_db.xml:tx_tlphotoblog_domain_model_article.text',
			'config' => Array (
                'type' => 'text',
                'cols' => '48',
                'rows' => '5',
                'softref' => 'typolink_tag,images,email[subst],url',
                'wizards' => Array(
                    '_PADDING' => 4,
                    'RTE' => Array(
                        'notNewRecords' => 1,
                        'RTEonly' => 1,
                        'type' => 'script',
                        'title' => 'LLL:EXT:cms/locallang_ttc.php:bodytext.W.RTE',
                        'icon' => 'wizard_rte2.gif',
                        'script' => 'wizard_rte.php',
                    ),
                )
            )
		),
		'category' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:tl_photoblog/Resources/Private/Language/locallang_db.xml:tx_tlphotoblog_domain_model_article.category',
			'config'  => array(
				'type' => 'select',
				'foreign_table' => 'tx_tlphotoblog_domain_model_category',
				'MM' => 'tx_tlphotoblog_article_category_mm',
				'maxitems' => 99999,
				'size' => '5',
				'minitems' => '0'
			)
		),
		'comments' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:tl_photoblog/Resources/Private/Language/locallang_db.xml:tx_tlphotoblog_domain_model_article.comments',
			'config'  => array(
				'type' => 'select',
				'foreign_table' => 'tx_tlphotoblog_domain_model_comment',
				'MM' => 'tx_tlphotoblog_article_comment_mm',
				'maxitems' => 99999,
				'size' => '5',
				'minitems' => '0'
			)
		),
		'tags' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:tl_photoblog/Resources/Private/Language/locallang_db.xml:tx_tlphotoblog_domain_model_article.tags',
			'config'  => array(
				'type' => 'select',
				'foreign_table' => 'tx_tlphotoblog_domain_model_tag',
				'MM' => 'tx_tlphotoblog_article_tag_mm',
				'maxitems' => 99999,
				'size' => '5',
				'minitems' => '0'
			)
		),
		'galleryimage' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:tl_photoblog/Resources/Private/Language/locallang_db.xml:tx_tlphotoblog_domain_model_article.galleryimage',
			'config'  => array(
				'type' => 'select',
				'foreign_table' => 'tx_tlphotoblog_domain_model_galleryimage',
				'MM' => 'tx_tlphotoblog_article_galleryimage_mm',
				'maxitems' => 99999,
				'size' => '5',
				'minitems' => '0'
			)
		),
	),
);
?>
