<?php

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

if (TYPO3_MODE == 'BE') {
	t3lib_extMgm::addModule('Apc', '', '', t3lib_extMgm::extPath($_EXTKEY) . 'Resources/Private/MainModules/Main/');


	/**
	 * Register Backend Module
	 */
	Tx_Extbase_Utility_Extension::registerModule(
		$_EXTKEY,
		'Apc',
		'Apc',
		'',
		array(
			'APC' => 'index'
		),
		array(
			'access' => 'user,group',
			'icon'   => 'EXT:aoe_apcinfo/Resources/Public/Icons/apc.png',
			'labels' => 'LLL:EXT:aoe_apcinfo/Resources/Private/Language/locallang_apc.xml',
		)
	);
}
