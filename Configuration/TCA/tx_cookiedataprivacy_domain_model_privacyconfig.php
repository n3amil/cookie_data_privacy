<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:cookie_data_privacy/Resources/Private/Language/locallang_db.xlf:tx_cookiedataprivacy_domain_model_privacyconfig',
        'label' => 'in_footer',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
		'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
		'searchFields' => 'in_footer,js_script,enable_form_privacy,position,popup_background,button_background,domain,expiry_day,cookie_page_uid,data_privacy_page_uid,js_path_external,css_path_external',
        'iconfile' => 'EXT:cookie_data_privacy/Resources/Public/Icons/tx_cookiedataprivacy_domain_model_privacyconfig.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, in_footer, js_script, enable_form_privacy, position, popup_background, button_background, domain, expiry_day, root_page_uid, cookie_page_uid, data_privacy_page_uid, js_path_external, css_path_external',
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, in_footer, js_script, enable_form_privacy, position, popup_background, button_background, domain, expiry_day, root_page_uid, cookie_page_uid, data_privacy_page_uid, js_path_external, css_path_external, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
		'sys_language_uid' => [
			'exclude' => true,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'special' => 'languages',
				'items' => [
					[
						'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
						-1,
						'flags-multiple'
					]
				],
				'default' => 0,
			],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_cookiedataprivacy_domain_model_privacyconfig',
                'foreign_table_where' => 'AND tx_cookiedataprivacy_domain_model_privacyconfig.pid=###CURRENT_PID### AND tx_cookiedataprivacy_domain_model_privacyconfig.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
		't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
		'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
		'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ]
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ],
        ],
        'in_footer' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:cookie_data_privacy/Resources/Private/Language/locallang_db.xlf:tx_cookiedataprivacy_domain_model_privacyconfig.in_footer',
	        'config' => [
			    'type' => 'check',
			    'items' => [
			        '1' => [
			            '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
			        ]
			    ],
			    'default' => 0
			]
	    ],
	    'js_script' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:cookie_data_privacy/Resources/Private/Language/locallang_db.xlf:tx_cookiedataprivacy_domain_model_privacyconfig.js_script',
	        'config' => [
			    'type' => 'text',
			    'cols' => 40,
			    'rows' => 15,
			    'eval' => 'trim'
			]
	    ],
	    'enable_form_privacy' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:cookie_data_privacy/Resources/Private/Language/locallang_db.xlf:tx_cookiedataprivacy_domain_model_privacyconfig.enable_form_privacy',
	        'config' => [
			    'type' => 'check',
			    'items' => [
			        '1' => [
			            '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
			        ]
			    ],
			    'default' => 0
			]
	    ],
	    'position' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:cookie_data_privacy/Resources/Private/Language/locallang_db.xlf:tx_cookiedataprivacy_domain_model_privacyconfig.position',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'items' => [
			        ['-- Label --', ''],
			    ],
			    'size' => 1,
			    'maxitems' => 1,
			    'eval' => ''
			],
	    ],
	    'popup_background' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:cookie_data_privacy/Resources/Private/Language/locallang_db.xlf:tx_cookiedataprivacy_domain_model_privacyconfig.popup_background',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'button_background' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:cookie_data_privacy/Resources/Private/Language/locallang_db.xlf:tx_cookiedataprivacy_domain_model_privacyconfig.button_background',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'domain' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:cookie_data_privacy/Resources/Private/Language/locallang_db.xlf:tx_cookiedataprivacy_domain_model_privacyconfig.domain',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'expiry_day' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:cookie_data_privacy/Resources/Private/Language/locallang_db.xlf:tx_cookiedataprivacy_domain_model_privacyconfig.expiry_day',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'int'
			]
	    ],
	    'root_page_uid' => [
	        'exclude' => true,
	        'label' => 'Root Page Uid',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'int'
			]
	    ],
	    'cookie_page_uid' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:cookie_data_privacy/Resources/Private/Language/locallang_db.xlf:tx_cookiedataprivacy_domain_model_privacyconfig.cookie_page_uid',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'int'
			]
	    ],
	    'data_privacy_page_uid' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:cookie_data_privacy/Resources/Private/Language/locallang_db.xlf:tx_cookiedataprivacy_domain_model_privacyconfig.data_privacy_page_uid',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'int'
			]
	    ],
	    'js_path_external' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:cookie_data_privacy/Resources/Private/Language/locallang_db.xlf:tx_cookiedataprivacy_domain_model_privacyconfig.js_path_external',
	        'config' => [
			    'type' => 'inline',
			    'foreign_table' => 'tx_cookiedataprivacy_domain_model_fileinclude',
			    'foreign_field' => 'privacyconfig',
			    'maxitems' => 9999,
			    'appearance' => [
			        'collapseAll' => 0,
			        'levelLinksPosition' => 'top',
			        'showSynchronizationLink' => 1,
			        'showPossibleLocalizationRecords' => 1,
			        'showAllLocalizationLink' => 1
			    ],
			],
	    ],
	    'css_path_external' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:cookie_data_privacy/Resources/Private/Language/locallang_db.xlf:tx_cookiedataprivacy_domain_model_privacyconfig.css_path_external',
	        'config' => [
			    'type' => 'inline',
			    'foreign_table' => 'tx_cookiedataprivacy_domain_model_fileinclude',
			    'foreign_field' => 'privacyconfig1',
			    'maxitems' => 9999,
			    'appearance' => [
			        'collapseAll' => 0,
			        'levelLinksPosition' => 'top',
			        'showSynchronizationLink' => 1,
			        'showPossibleLocalizationRecords' => 1,
			        'showAllLocalizationLink' => 1
			    ],
			],
	    ],
    ],
];
