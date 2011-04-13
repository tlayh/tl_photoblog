<?php

########################################################################
# Extension Manager/Repository config file for ext "tl_photoblog".
#
# Auto generated 12-04-2011 14:56
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Photoblog',
	'description' => 'Simple photo blog',
	'category' => 'plugin',
	'author' => 'Thomas Layh',
	'author_email' => 'thomas@layh.com',
	'author_company' => '',
	'shy' => '',
	'dependencies' => 'cms,extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.0.3',
	'constraints' => array(
		'depends' => array(
			'cms' => '4.5.2',
			'extbase' => '',
			'fluid' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:54:{s:6:"README";s:4:"d816";s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"a60f";s:14:"ext_tables.php";s:4:"b800";s:14:"ext_tables.sql";s:4:"5994";s:16:"kickstarter.json";s:4:"7d93";s:40:"Classes/Controller/ArticleController.php";s:4:"c76a";s:41:"Classes/Controller/CategoryController.php";s:4:"59ac";s:40:"Classes/Controller/CommentController.php";s:4:"3e85";s:32:"Classes/Domain/Model/Article.php";s:4:"3ea0";s:33:"Classes/Domain/Model/Category.php";s:4:"bf7f";s:32:"Classes/Domain/Model/Comment.php";s:4:"eb94";s:37:"Classes/Domain/Model/Galleryimage.php";s:4:"2fa5";s:28:"Classes/Domain/Model/Tag.php";s:4:"0fd4";s:47:"Classes/Domain/Repository/ArticleRepository.php";s:4:"d781";s:48:"Classes/Domain/Repository/CategoryRepository.php";s:4:"9447";s:47:"Classes/Domain/Repository/CommentRepository.php";s:4:"540e";s:41:"Classes/ViewHelpers/GalleryViewHelper.php";s:4:"d0b9";s:47:"Classes/ViewHelpers/LinkvalidatorViewHelper.php";s:4:"47af";s:29:"Configuration/TCA/Article.php";s:4:"38fe";s:30:"Configuration/TCA/Category.php";s:4:"346e";s:29:"Configuration/TCA/Comment.php";s:4:"e891";s:34:"Configuration/TCA/Galleryimage.php";s:4:"43fe";s:25:"Configuration/TCA/Tag.php";s:4:"00dd";s:34:"Configuration/TypoScript/setup.txt";s:4:"aa1a";s:40:"Resources/Private/Language/locallang.xml";s:4:"d2a6";s:80:"Resources/Private/Language/locallang_csh_tx_tlphotoblog_domain_model_article.xml";s:4:"6c7c";s:81:"Resources/Private/Language/locallang_csh_tx_tlphotoblog_domain_model_category.xml";s:4:"1fbc";s:80:"Resources/Private/Language/locallang_csh_tx_tlphotoblog_domain_model_comment.xml";s:4:"b2fe";s:85:"Resources/Private/Language/locallang_csh_tx_tlphotoblog_domain_model_galleryimage.xml";s:4:"f749";s:76:"Resources/Private/Language/locallang_csh_tx_tlphotoblog_domain_model_tag.xml";s:4:"ce6e";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"08fc";s:38:"Resources/Private/Layouts/default.html";s:4:"3358";s:50:"Resources/Private/Partials/article-navigation.html";s:4:"f459";s:40:"Resources/Private/Partials/comments.html";s:4:"3cc5";s:42:"Resources/Private/Partials/formErrors.html";s:4:"f5bc";s:42:"Resources/Private/Partials/newComment.html";s:4:"fcbc";s:46:"Resources/Private/Templates/Article/index.html";s:4:"bb60";s:45:"Resources/Private/Templates/Article/show.html";s:4:"8020";s:46:"Resources/Private/Templates/Category/edit.html";s:4:"4fa4";s:47:"Resources/Private/Templates/Category/index.html";s:4:"9048";s:46:"Resources/Private/Templates/Category/list.html";s:4:"d41d";s:45:"Resources/Private/Templates/Category/new.html";s:4:"c3bd";s:46:"Resources/Private/Templates/Category/show.html";s:4:"8a1b";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:62:"Resources/Public/Icons/tx_tlphotoblog_domain_model_article.gif";s:4:"1103";s:63:"Resources/Public/Icons/tx_tlphotoblog_domain_model_category.gif";s:4:"1103";s:62:"Resources/Public/Icons/tx_tlphotoblog_domain_model_comment.gif";s:4:"1103";s:67:"Resources/Public/Icons/tx_tlphotoblog_domain_model_galleryimage.gif";s:4:"1103";s:58:"Resources/Public/Icons/tx_tlphotoblog_domain_model_tag.gif";s:4:"1103";s:32:"Resources/Public/Js/photoblog.js";s:4:"e9fa";s:33:"Resources/Public/Js/reflection.js";s:4:"b6f8";s:34:"Resources/Public/css/photoblog.css";s:4:"2fad";s:42:"Tests/Classes/Domain/Model/ArticleTest.php";s:4:"4b25";}',
);

?>