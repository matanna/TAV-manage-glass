<?php

namespace ContainerO5zxzih;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere1323 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdd3ae = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5cc9f = [
        
    ];

    public function getConnection()
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'getConnection', array(), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'getMetadataFactory', array(), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'getExpressionBuilder', array(), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'beginTransaction', array(), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'getCache', array(), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'transactional', array('func' => $func), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->transactional($func);
    }

    public function commit()
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'commit', array(), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->commit();
    }

    public function rollback()
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'rollback', array(), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'getClassMetadata', array('className' => $className), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'createQuery', array('dql' => $dql), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'createNamedQuery', array('name' => $name), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'createQueryBuilder', array(), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'flush', array('entity' => $entity), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'clear', array('entityName' => $entityName), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->clear($entityName);
    }

    public function close()
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'close', array(), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->close();
    }

    public function persist($entity)
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'persist', array('entity' => $entity), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'remove', array('entity' => $entity), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'refresh', array('entity' => $entity), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'detach', array('entity' => $entity), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'merge', array('entity' => $entity), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'contains', array('entity' => $entity), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'getEventManager', array(), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'getConfiguration', array(), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'isOpen', array(), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'getUnitOfWork', array(), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'getProxyFactory', array(), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'initializeObject', array('obj' => $obj), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'getFilters', array(), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'isFiltersStateClean', array(), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'hasFilters', array(), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return $this->valueHoldere1323->hasFilters();
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

        $instance->initializerdd3ae = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere1323) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere1323 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere1323->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, '__get', ['name' => $name], $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        if (isset(self::$publicProperties5cc9f[$name])) {
            return $this->valueHoldere1323->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1323;

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

        $targetObject = $this->valueHoldere1323;
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
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1323;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere1323;
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
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, '__isset', array('name' => $name), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1323;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere1323;
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
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, '__unset', array('name' => $name), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1323;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere1323;
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
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, '__clone', array(), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        $this->valueHoldere1323 = clone $this->valueHoldere1323;
    }

    public function __sleep()
    {
        $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, '__sleep', array(), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;

        return array('valueHoldere1323');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdd3ae = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdd3ae;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdd3ae && ($this->initializerdd3ae->__invoke($valueHoldere1323, $this, 'initializeProxy', array(), $this->initializerdd3ae) || 1) && $this->valueHoldere1323 = $valueHoldere1323;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere1323;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere1323;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
