<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi1',
	array(
		'Article' => 'index, show','Category' => 'index, show','Comment' => 'comment',
	),
	array(
		'Article' => 'index, show','Category' => 'index, show','Comment' => 'comment',
	)
);

?>
