<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.unique_value_denormalizer' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/ValueDenormalizerInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/Value/UniqueValueDenormalizer.php';

return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.unique_value_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Value\UniqueValueDenormalizer(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.simple_value_denormalizer']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.value.simple_value_denormalizer'] : $this->load('getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Value_SimpleValueDenormalizerService.php')) && false ?: '_'});
