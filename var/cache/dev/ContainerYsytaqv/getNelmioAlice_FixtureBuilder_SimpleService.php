<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.fixture_builder.simple' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilderInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/SimpleBuilder.php';

return $this->services['nelmio_alice.fixture_builder.simple'] = new \Nelmio\Alice\FixtureBuilder\SimpleBuilder(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.simple']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.simple'] : $this->load('getNelmioAlice_FixtureBuilder_Denormalizer_SimpleService.php')) && false ?: '_'});
