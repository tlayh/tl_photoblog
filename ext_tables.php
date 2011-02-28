<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'Photoblog'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Photoblog');

//$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_pi1'] = 'pi_flexform';
//t3lib_extMgm::addPiFlexFormValue($_EXTKEY . '_pi1', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_list.xml');


t3lib_extMgm::addLLrefForTCAdescr('tx_tlphotoblog_domain_model_category', 'EXT:tl_photoblog/Resources/Private/Language/locallang_csh_tx_tlphotoblog_domain_model_category.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_tlphotoblog_domain_model_category');
$TCA['tx_tlphotoblog_domain_model_category'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:tl_photoblog/Resources/Private/Language/locallang_db.xml:tx_tlphotoblog_domain_model_category',
		'label' 			=> 'name',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Category.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_tlphotoblog_domain_model_category.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_tlphotoblog_domain_model_article', 'EXT:tl_photoblog/Resources/Private/Language/locallang_csh_tx_tlphotoblog_domain_model_article.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_tlphotoblog_domain_model_article');
$TCA['tx_tlphotoblog_domain_model_article'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:tl_photoblog/Resources/Private/Language/locallang_db.xml:tx_tlphotoblog_domain_model_article',
		'label' 			=> 'title',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Article.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_tlphotoblog_domain_model_article.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_tlphotoblog_domain_model_comment', 'EXT:tl_photoblog/Resources/Private/Language/locallang_csh_tx_tlphotoblog_domain_model_comment.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_tlphotoblog_domain_model_comment');
$TCA['tx_tlphotoblog_domain_model_comment'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:tl_photoblog/Resources/Private/Language/locallang_db.xml:tx_tlphotoblog_domain_model_comment',
		'label' 			=> 'name',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'default_sortby' => 'ORDER BY crdate DESC',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Comment.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_tlphotoblog_domain_model_comment.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_tlphotoblog_domain_model_tag', 'EXT:tl_photoblog/Resources/Private/Language/locallang_csh_tx_tlphotoblog_domain_model_tag.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_tlphotoblog_domain_model_tag');
$TCA['tx_tlphotoblog_domain_model_tag'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:tl_photoblog/Resources/Private/Language/locallang_db.xml:tx_tlphotoblog_domain_model_tag',
		'label' 			=> 'name',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Tag.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_tlphotoblog_domain_model_tag.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_tlphotoblog_domain_model_galleryimage', 'EXT:tl_photoblog/Resources/Private/Language/locallang_csh_tx_tlphotoblog_domain_model_galleryimage.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_tlphotoblog_domain_model_galleryimage');
$TCA['tx_tlphotoblog_domain_model_galleryimage'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:tl_photoblog/Resources/Private/Language/locallang_db.xml:tx_tlphotoblog_domain_model_galleryimage',
		'label' 			=> 'name',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Galleryimage.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_tlphotoblog_domain_model_galleryimage.gif'
	)
);

?>
