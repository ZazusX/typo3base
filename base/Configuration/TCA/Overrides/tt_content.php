<?php defined('TYPO3') || die('Access denied!');

/* Slider
 */

$tca = [
    'ctrl' => [
        'typeicons' => [
            'slider' => 'slider',
        ],
        'typeicon_classes' => [
            'slider' => 'slider',
        ],
    ],
    'types' => [
        'slider' => [
            'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
            pi_flexform,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames, --palette--;;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, --palette--;;hidden,
            --palette--;;access, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,'
        ],
    ],
];
$GLOBALS['TCA']['tt_content'] = array_replace_recursive($GLOBALS['TCA']['tt_content'], $tca);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:base/Configuration/FlexForms/ContentElements/Slider.xml',
    'slider'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:base/Resources/Private/Language/locallang.xlf:slider',
        'slider',
        'slider',
    ],
    'textmedia',
    'after'
);