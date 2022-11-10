<?php

namespace ContainerGcggZxh;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder43d0c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerff0ea = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc9f11 = [
        
    ];

    public function getConnection()
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'getConnection', array(), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'getMetadataFactory', array(), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'getExpressionBuilder', array(), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'beginTransaction', array(), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'getCache', array(), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'transactional', array('func' => $func), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'wrapInTransaction', array('func' => $func), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'commit', array(), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->commit();
    }

    public function rollback()
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'rollback', array(), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'getClassMetadata', array('className' => $className), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'createQuery', array('dql' => $dql), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'createNamedQuery', array('name' => $name), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'createQueryBuilder', array(), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'flush', array('entity' => $entity), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'clear', array('entityName' => $entityName), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->clear($entityName);
    }

    public function close()
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'close', array(), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->close();
    }

    public function persist($entity)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'persist', array('entity' => $entity), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'remove', array('entity' => $entity), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'refresh', array('entity' => $entity), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'detach', array('entity' => $entity), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'merge', array('entity' => $entity), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'contains', array('entity' => $entity), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'getEventManager', array(), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'getConfiguration', array(), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'isOpen', array(), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'getUnitOfWork', array(), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'getProxyFactory', array(), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'initializeObject', array('obj' => $obj), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'getFilters', array(), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'isFiltersStateClean', array(), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'hasFilters', array(), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return $this->valueHolder43d0c->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerff0ea = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder43d0c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder43d0c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder43d0c->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, '__get', ['name' => $name], $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        if (isset(self::$publicPropertiesc9f11[$name])) {
            return $this->valueHolder43d0c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder43d0c;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder43d0c;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder43d0c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder43d0c;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, '__isset', array('name' => $name), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder43d0c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder43d0c;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, '__unset', array('name' => $name), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder43d0c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder43d0c;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, '__clone', array(), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        $this->valueHolder43d0c = clone $this->valueHolder43d0c;
    }

    public function __sleep()
    {
        $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, '__sleep', array(), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;

        return array('valueHolder43d0c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerff0ea = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerff0ea;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerff0ea && ($this->initializerff0ea->__invoke($valueHolder43d0c, $this, 'initializeProxy', array(), $this->initializerff0ea) || 1) && $this->valueHolder43d0c = $valueHolder43d0c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder43d0c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder43d0c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
