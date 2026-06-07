<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

return (new Config())
    ->setRiskyAllowed(false)
    ->setRules([
        '@PSR12' => true,

        'array_syntax' => ['syntax' => 'short'],
        'ordered_imports' => true,
        'single_quote' => false,
        'no_unused_imports' => true,
        'blank_line_after_namespace' => true,
        'braces_position' => [
            'functions_opening_brace' => 'next_line_unless_newline_at_signature_end',
        ],
    ])
    ->setFinder(
        Finder::create()
            ->in(__DIR__ . '/workshops')
            ->exclude([
                'var',
                'vendor',
            ])
    );
