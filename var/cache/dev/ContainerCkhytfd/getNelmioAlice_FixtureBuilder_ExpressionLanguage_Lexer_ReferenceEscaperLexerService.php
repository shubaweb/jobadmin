<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.fixture_builder.expression_language.lexer.reference_escaper_lexer' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/LexerInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Lexer/ReferenceEscaperLexer.php';

return $this->services['nelmio_alice.fixture_builder.expression_language.lexer.reference_escaper_lexer'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\ReferenceEscaperLexer(${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.lexer.globals_patterns_lexer']) ? $this->services['nelmio_alice.fixture_builder.expression_language.lexer.globals_patterns_lexer'] : $this->load('getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_GlobalsPatternsLexerService.php')) && false ?: '_'});
