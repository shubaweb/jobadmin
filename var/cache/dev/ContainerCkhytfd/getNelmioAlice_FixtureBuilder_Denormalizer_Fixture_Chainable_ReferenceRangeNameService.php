<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.fixture_builder.denormalizer.fixture.chainable.reference_range_name' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/FixtureDenormalizerInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/ChainableFixtureDenormalizerInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParserAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/Chainable/ReferenceRangeNameDenormalizer.php';

return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.reference_range_name'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\ReferenceRangeNameDenormalizer(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.specs.simple']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.specs.simple'] : $this->load('getNelmioAlice_FixtureBuilder_Denormalizer_Specs_SimpleService.php')) && false ?: '_'});
