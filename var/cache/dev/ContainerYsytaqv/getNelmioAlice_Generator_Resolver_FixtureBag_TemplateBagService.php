<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.generator.resolver.fixture_bag.template_bag' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/Generator/Resolver/FixtureBagResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/Generator/Resolver/Fixture/TemplateFixtureBagResolver.php';

return $this->services['nelmio_alice.generator.resolver.fixture_bag.template_bag'] = new \Nelmio\Alice\Generator\Resolver\Fixture\TemplateFixtureBagResolver();
