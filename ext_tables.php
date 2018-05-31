<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        /*\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'TYPO3Liebhaber.CookieDataPrivacy',
            'Ext1',
            'Cookie Privacy & Data Privacy (DSGVO)'
        );*/

        if (TYPO3_MODE === 'BE') {

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'TYPO3Liebhaber.CookieDataPrivacy',
                'tools', // Make module a submodule of 'tools'
                'mod1', // Submodule key
                '', // Position
                [
                    'PrivacyConfig' => 'list, new, create, edit, update, delete','FileInclude' => 'list, show','ShowCase' => 'list, show',
                ],
                [
                    'access' => 'user,group',
					'icon'   => 'EXT:' . $extKey . '/Resources/Public/Icons/user_mod_mod1.svg',
                    'labels' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_mod1.xlf',
                ]
            );

        }

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Cookie Privacy & Data Privacy (DSGVO)');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cookiedataprivacy_domain_model_privacyconfig', 'EXT:cookie_data_privacy/Resources/Private/Language/locallang_csh_tx_cookiedataprivacy_domain_model_privacyconfig.xlf');
        //\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cookiedataprivacy_domain_model_privacyconfig');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cookiedataprivacy_domain_model_fileinclude', 'EXT:cookie_data_privacy/Resources/Private/Language/locallang_csh_tx_cookiedataprivacy_domain_model_fileinclude.xlf');
        //\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cookiedataprivacy_domain_model_fileinclude');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cookiedataprivacy_domain_model_showcase', 'EXT:cookie_data_privacy/Resources/Private/Language/locallang_csh_tx_cookiedataprivacy_domain_model_showcase.xlf');
        //\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cookiedataprivacy_domain_model_showcase');

    },
    $_EXTKEY
);
