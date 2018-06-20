<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'TYPO3Liebhaber.CookieDataPrivacy',
            'Ext1',
            [
            	'ShowCase' => 'show, list',
                'PrivacyConfig' => 'new, create',
                'FileInclude' => 'list, show'
            ],
            // non-cacheable actions
            [
            	'ShowCase' => 'show',
                'PrivacyConfig' => 'create',
                'FileInclude' => ''
            ]
        );

        // Add external TS setup
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extKey . '/Configuration/TypoScript/External/IncludeTs.typoscript">');

		// wizards
		/*\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
			'mod {
				wizards.newContentElement.wizardItems.plugins {
					elements {
						ext1 {
							icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_ext1.svg
							title = LLL:EXT:cookie_data_privacy/Resources/Private/Language/locallang_db.xlf:tx_cookie_data_privacy_domain_model_ext1
							description = LLL:EXT:cookie_data_privacy/Resources/Private/Language/locallang_db.xlf:tx_cookie_data_privacy_domain_model_ext1.description
							tt_content_defValues {
								CType = list
								list_type = cookiedataprivacy_ext1
							}
						}
					}
					show = *
				}
		   }'
		);*/
    },
    $_EXTKEY
);
