<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.fixture_builder.expression_language.lexer.string_then_reference_lexer' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/LexerInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Lexer/StringThenReferenceLexer.php';

return $this->services['nelmio_alice.fixture_builder.expression_language.lexer.string_then_reference_lexer'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\StringThenReferenceLexer(${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.lexer.sub_patterns_lexer']) ? $this->services['nelmio_alice.fixture_builder.expression_language.lexer.sub_patterns_lexer'] : $this->load('getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_SubPatternsLexerService.php')) && false ?: '_'});
