<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "skyneta11ypdfremediation".
 *
 * Auto generated 14-09-2026 06:58
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => "SkynetA11y PDF Remediation",
  'description' => 'AI-powered PDF accessibility remediation - upload PDFs, scan website PDFs, and download remediated files.',
  'category' => 'plugin',
  'version' => '14.0.0',
  'state' => 'stable',
  'uploadfolder' => false,
  'clearcacheonload' => false,
  'author' => 'Skynet Technologies USA LLC',
  'author_email' => 'hello@skynetindia.info',
  'author_company' => 'Skynet Technologies USA LLC',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '13.0.0-14.9.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'autoload' => 
  array (
    'psr-4' => 
    array (
      'Skynettechnologies\\Skyneta11ypdfremediation\\' => 'Classes/',
    ),
  ),
);

