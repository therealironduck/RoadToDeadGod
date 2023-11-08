<?php

$finder = PhpCsFixer\Finder::create()
    ->notPath('bootstrap/cache')
    ->notPath('storage')
    ->notPath('vendor')
    ->notPath('tests')
    ->in(__DIR__)
    ->name('*.php')
    ->notName('*.blade.php')
    ->notName('_ide_helper_models.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return jkniest\Linting\styles($finder);
