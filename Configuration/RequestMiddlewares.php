<?php

return [
    'frontend' => [
        'Skyneta11ypdfremediation-frontend' => [
            'target' => \Skynettechnologies\Skyneta11ypdfremediation\Middleware\AwesomeMiddleware::class,
            'after' => [
                'typo3/cms-frontend/prepare-tsfe-rendering',
            ],
        ]
    ]
];
