<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->in(__DIR__);

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        // PHP arrays should be declared using the short syntax [] not array().
        'array_syntax' => ['syntax' => 'short'],

        // In array declaration, there MUST be a whitespace after each comma.
        'whitespace_after_comma_in_array' => true,

        // Ensure there is no code on the same line as the PHP open tag and it is followed by a blank line.
        'blank_line_after_opening_tag' => true,

        // An empty line feed should precede a return statement.
        'blank_line_before_return' => true,

        // Single line comments should use double slashes // and not hash #.
        'hash_to_slash_comment' => true,

        // Methods must be separated with one blank line.
        'method_separation' => true,

        // Remove trailing whitespace at the end of blank lines.
        'no_whitespace_in_blank_line' => true,

        // Logical NOT operators (!) should have leading and trailing whitespaces.
        'not_operator_with_space' => true,

        // There should not be space before or after object T_OBJECT_OPERATOR ->.
        'object_operator_without_whitespace' => true,

        // The import statements should be sorted by length.
        'ordered_imports' => ['sortAlgorithm' => 'length'],

        // All items of the @param, @throws, @return, @var, and @type phpdoc tags must be aligned vertically.
        'phpdoc_align' => true,

        // Docblocks should have the same indentation as the documented subject.
        'phpdoc_indent' => true,

        // Annotations in phpdocs should be ordered so that param annotations come first, then throws annotations, then return annotations.
        'phpdoc_order' => true,

        // The type of @return annotations of methods returning a reference to itself must be $this.
        'phpdoc_return_self_reference' => true,

        // Phpdocs summary should end in either a full stop, exclamation mark, or question mark.
        'phpdoc_summary' => true,

        // Docblocks should only be used on structural elements.
        'phpdoc_to_comment' => true,

        // Cast (boolean) and (integer) should be written as (bool) and (int), (double) and (real) as (float).
        'short_scalar_cast' => true,

        // A single space should be between cast and variable.
        'cast_spaces' => true,

        // There should be exactly one blank line before a namespace declaration.
        'single_blank_line_before_namespace' => true,

        // Standardize spaces around ternary operator.
        'ternary_operator_spaces' => true,

        // PHP multi-line arrays should have a trailing comma.
        'trailing_comma_in_multiline_array' => true,

        // @package and @subpackage annotations should be omitted from phpdocs.
        'phpdoc_no_package' => true,

        // @var and @type annotations should not contain the variable name.
        'phpdoc_var_without_name' => true,

        // Scalar types should always be written in the same form. int not integer, bool not boolean, float not real or double.
        'phpdoc_scalar' => true,
    ])
    ->setFinder($finder)
;
