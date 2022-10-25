<?php

namespace ContainerVZ3XYy4;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8541c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5be3a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties293af = [
        
    ];

    public function getConnection()
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'getConnection', array(), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'getMetadataFactory', array(), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'getExpressionBuilder', array(), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'beginTransaction', array(), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'getCache', array(), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'transactional', array('func' => $func), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'commit', array(), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->commit();
    }

    public function rollback()
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'rollback', array(), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'getClassMetadata', array('className' => $className), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'createQuery', array('dql' => $dql), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'createNamedQuery', array('name' => $name), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'createQueryBuilder', array(), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'flush', array('entity' => $entity), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'clear', array('entityName' => $entityName), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->clear($entityName);
    }

    public function close()
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'close', array(), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->close();
    }

    public function persist($entity)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'persist', array('entity' => $entity), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'remove', array('entity' => $entity), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'refresh', array('entity' => $entity), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'detach', array('entity' => $entity), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'merge', array('entity' => $entity), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'contains', array('entity' => $entity), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'getEventManager', array(), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'getConfiguration', array(), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'isOpen', array(), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'getUnitOfWork', array(), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'getProxyFactory', array(), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'initializeObject', array('obj' => $obj), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'getFilters', array(), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'isFiltersStateClean', array(), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'hasFilters', array(), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return $this->valueHolder8541c->hasFilters();
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

        $instance->initializer5be3a = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder8541c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8541c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8541c->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, '__get', ['name' => $name], $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        if (isset(self::$publicProperties293af[$name])) {
            return $this->valueHolder8541c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8541c;

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

        $targetObject = $this->valueHolder8541c;
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
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8541c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8541c;
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
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, '__isset', array('name' => $name), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8541c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8541c;
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
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, '__unset', array('name' => $name), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8541c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8541c;
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
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, '__clone', array(), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        $this->valueHolder8541c = clone $this->valueHolder8541c;
    }

    public function __sleep()
    {
        $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, '__sleep', array(), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;

        return array('valueHolder8541c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5be3a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5be3a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5be3a && ($this->initializer5be3a->__invoke($valueHolder8541c, $this, 'initializeProxy', array(), $this->initializer5be3a) || 1) && $this->valueHolder8541c = $valueHolder8541c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8541c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8541c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
