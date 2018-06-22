<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.file_parser.chainable.php' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/ParserInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/Parser/ChainableParserInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/Parser/Chainable/PhpParser.php';

return $this->services['nelmio_alice.file_parser.chainable.php'] = new \Nelmio\Alice\Parser\Chainable\PhpParser();
