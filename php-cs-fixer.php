<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

// All php files in current working directory
$finder = Finder::create()->in(getcwd());

// Set of rules
$rules = [
    'psr_autoloading'                  => true,
    '@PSR1'                            => true,
    '@PSR2'                            => true,
    '@Symfony'                         => true,
    '@Symfony:risky'                   => true,
    '@PHP71Migration'                  => true,
    'self_accessor'                    => false,
    'binary_operator_spaces'           => [
        'operators' => [
            '=' => 'align',
        ],
    ],
    'array_syntax'                     => [
        'syntax' => 'short',
    ],
    'combine_consecutive_unsets'       => true,
    'is_null'                          => true,
    'yoda_style'                       => true,
    'linebreak_after_opening_tag'      => true,
    'list_syntax'                      => [
        'syntax' => 'short',
    ],
    'mb_str_functions'                 => true,
    'ordered_imports'                  => [
        'sort_algorithm' => 'length',
    ],
    'return_type_declaration'          => [
        'space_before' => 'one',
    ],
    'semicolon_after_instruction'      => true,
    'error_suppression'                => false,
    'phpdoc_to_comment'                => [
        'ignored_tags' => [
            'var',
            'return',
            'param',
            'property',
            'property-read',
            'property-write',
            'method',
            'deprecated',
            'internal',
        ],
    ],
];

return (new Config())
    ->setFinder($finder)
    ->setRules($rules)
    ->setRiskyAllowed(true);
