<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderc8292 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeree37a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1a986 = [
        
    ];

    public function getConnection()
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'getConnection', array(), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'getMetadataFactory', array(), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'getExpressionBuilder', array(), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'beginTransaction', array(), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'getCache', array(), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->getCache();
    }

    public function transactional($func)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'transactional', array('func' => $func), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->transactional($func);
    }

    public function commit()
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'commit', array(), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->commit();
    }

    public function rollback()
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'rollback', array(), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'getClassMetadata', array('className' => $className), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'createQuery', array('dql' => $dql), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'createNamedQuery', array('name' => $name), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'createQueryBuilder', array(), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'flush', array('entity' => $entity), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'clear', array('entityName' => $entityName), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->clear($entityName);
    }

    public function close()
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'close', array(), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->close();
    }

    public function persist($entity)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'persist', array('entity' => $entity), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'remove', array('entity' => $entity), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'refresh', array('entity' => $entity), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'detach', array('entity' => $entity), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'merge', array('entity' => $entity), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'getRepository', array('entityName' => $entityName), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'contains', array('entity' => $entity), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'getEventManager', array(), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'getConfiguration', array(), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'isOpen', array(), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'getUnitOfWork', array(), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'getProxyFactory', array(), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'initializeObject', array('obj' => $obj), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'getFilters', array(), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'isFiltersStateClean', array(), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'hasFilters', array(), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return $this->valueHolderc8292->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializeree37a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc8292) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc8292 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc8292->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, '__get', ['name' => $name], $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        if (isset(self::$publicProperties1a986[$name])) {
            return $this->valueHolderc8292->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8292;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolderc8292;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8292;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderc8292;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, '__isset', array('name' => $name), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8292;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderc8292;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, '__unset', array('name' => $name), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc8292;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderc8292;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, '__clone', array(), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        $this->valueHolderc8292 = clone $this->valueHolderc8292;
    }

    public function __sleep()
    {
        $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, '__sleep', array(), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;

        return array('valueHolderc8292');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializeree37a = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializeree37a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeree37a && ($this->initializeree37a->__invoke($valueHolderc8292, $this, 'initializeProxy', array(), $this->initializeree37a) || 1) && $this->valueHolderc8292 = $valueHolderc8292;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc8292;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolderc8292;
    }


}
