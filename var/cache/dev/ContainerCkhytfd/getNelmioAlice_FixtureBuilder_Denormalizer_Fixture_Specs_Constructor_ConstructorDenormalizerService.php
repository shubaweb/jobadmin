<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.constructor_denormalizer' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/ConstructorDenormalizerInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/Constructor/ConstructorDenormalizer.php';

return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.constructor_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Constructor\ConstructorDenormalizer(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.arguments.simple_arguments_denormalizer']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.arguments.simple_arguments_denormalizer'] : $this->load('getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Arguments_SimpleArgumentsDenormalizerService.php')) && false ?: '_'});