<?php

namespace Container05Xxg9h;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8b7aa = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer71b3a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties973c1 = [
        
    ];

    public function getConnection()
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'getConnection', array(), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'getMetadataFactory', array(), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'getExpressionBuilder', array(), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'beginTransaction', array(), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'getCache', array(), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->getCache();
    }

    public function transactional($func)
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'transactional', array('func' => $func), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->transactional($func);
    }

    public function commit()
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'commit', array(), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->commit();
    }

    public function rollback()
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'rollback', array(), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'getClassMetadata', array('className' => $className), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'createQuery', array('dql' => $dql), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'createNamedQuery', array('name' => $name), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'createQueryBuilder', array(), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'flush', array('entity' => $entity), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'clear', array('entityName' => $entityName), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->clear($entityName);
    }

    public function close()
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'close', array(), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->close();
    }

    public function persist($entity)
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'persist', array('entity' => $entity), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'remove', array('entity' => $entity), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'refresh', array('entity' => $entity), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'detach', array('entity' => $entity), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'merge', array('entity' => $entity), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'getRepository', array('entityName' => $entityName), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'contains', array('entity' => $entity), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'getEventManager', array(), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'getConfiguration', array(), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'isOpen', array(), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'getUnitOfWork', array(), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'getProxyFactory', array(), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'initializeObject', array('obj' => $obj), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'getFilters', array(), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'isFiltersStateClean', array(), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'hasFilters', array(), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return $this->valueHolder8b7aa->hasFilters();
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

        $instance->initializer71b3a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8b7aa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8b7aa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8b7aa->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, '__get', ['name' => $name], $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        if (isset(self::$publicProperties973c1[$name])) {
            return $this->valueHolder8b7aa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b7aa;

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

        $targetObject = $this->valueHolder8b7aa;
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
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b7aa;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8b7aa;
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
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, '__isset', array('name' => $name), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b7aa;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8b7aa;
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
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, '__unset', array('name' => $name), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b7aa;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8b7aa;
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
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, '__clone', array(), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        $this->valueHolder8b7aa = clone $this->valueHolder8b7aa;
    }

    public function __sleep()
    {
        $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, '__sleep', array(), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;

        return array('valueHolder8b7aa');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer71b3a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer71b3a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer71b3a && ($this->initializer71b3a->__invoke($valueHolder8b7aa, $this, 'initializeProxy', array(), $this->initializer71b3a) || 1) && $this->valueHolder8b7aa = $valueHolder8b7aa;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8b7aa;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8b7aa;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
