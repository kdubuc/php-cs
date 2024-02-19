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
    'binary_operator_spaces'           => [
        'operators' => [
            '=>' => 'align',
            '='  => 'align',
        ],
    ],
    'array_syntax'                     => [
        'syntax' => 'short',
    ],
    'combine_consecutive_unsets'       => true,
    'general_phpdoc_annotation_remove' => [
        'annotations' => ['param', 'return'],
    ],
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
            'property',
            'property-read',
            'property-write',
            'method',
        ],
    ],
];

return (new Config())
    ->setFinder($finder)
    ->setRules($rules)
    ->setRiskyAllowed(true);
