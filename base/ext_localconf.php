<?php 
defined('TYPO3') || die();

call_user_func(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="DIR:EXT:base/Configuration/PageTS/" extensions="typoscript">'
    );
});

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:base/Configuration/Rte/dce.yaml';