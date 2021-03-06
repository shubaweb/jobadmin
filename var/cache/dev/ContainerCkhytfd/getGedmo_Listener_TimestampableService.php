<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'gedmo.listener.timestampable' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/EventSubscriber.php';
include_once $this->targetDirs[3].'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Mapping/MappedEventSubscriber.php';
include_once $this->targetDirs[3].'/vendor/gedmo/doctrine-extensions/lib/Gedmo/AbstractTrackingListener.php';
include_once $this->targetDirs[3].'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Timestampable/TimestampableListener.php';

$this->services['gedmo.listener.timestampable'] = $instance = new \Gedmo\Timestampable\TimestampableListener();

$instance->setAnnotationReader(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});

return $instance;
