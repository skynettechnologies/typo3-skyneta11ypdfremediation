<?php

declare(strict_types=1);

defined('TYPO3') || die('Access denied.');

use Skynettechnologies\Skyneta11ypdfremediation\Controller\ToolController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

ExtensionUtility::configurePlugin(
    'Skyneta11ypdfremediation',
    'Tool',
    [
        ToolController::class => 'main,chatSettings',
    ],
    [
        ToolController::class => 'chatSettings',
    ],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
