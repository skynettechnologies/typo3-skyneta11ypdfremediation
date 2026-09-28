<?php

return [
    'Sntg_module' => [
        'labels' => 'LLL:EXT:skyneta11ypdfremediation/Resources/Private/Language/BackendModule.xlf',
        'icon' => 'EXT:skyneta11ypdfremediation/Resources/Public/Icons/module-skyneta11ypdfremediation.svg',
        'iconIdentifier' => 'module-skyneta11ypdfremediation',
        'position' => ['after' => 'web'],
    ],

    'Sntg_Skyneta11ypdfremediationToolmodule' => [
        'parent' => 'Sntg_module',
        'position' => ['before' => 'top'],
        'access' => 'admin',

        'path' => '/module/skyneta11ypdfremediation/Skyneta11ypdfremediation',

        'icon' => 'EXT:skyneta11ypdfremediation/Resources/Public/Icons/skyneta11ypdfremediation.svg',

        'labels' => 'LLL:EXT:skyneta11ypdfremediation/Resources/Private/Language/locallang_skyneta11ypdfremediationappmodule.xlf',

        'extensionName' => 'Skyneta11ypdfremediation',

        'controllerActions' => [
            \Skynettechnologies\Skyneta11ypdfremediation\Controller\ToolController::class => [
                'chatSettings',
            ],
        ],
    ],
];