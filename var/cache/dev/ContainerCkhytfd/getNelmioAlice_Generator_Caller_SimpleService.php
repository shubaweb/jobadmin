<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.generator.caller.simple' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/Generator/CallerInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/Generator/ValueResolverAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/Generator/Caller/SimpleCaller.php';

return $this->services['nelmio_alice.generator.caller.simple'] = new \Nelmio\Alice\Generator\Caller\SimpleCaller(${($_ = isset($this->services['nelmio_alice.generator.caller.registry']) ? $this->services['nelmio_alice.generator.caller.registry'] : $this->load('getNelmioAlice_Generator_Caller_RegistryService.php')) && false ?: '_'}, ${($_ = isset($this->services['nelmio_alice.generator.resolver.value.registry']) ? $this->services['nelmio_alice.generator.resolver.value.registry'] : $this->load('getNelmioAlice_Generator_Resolver_Value_RegistryService.php')) && false ?: '_'});