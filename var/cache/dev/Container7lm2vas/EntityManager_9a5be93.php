<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder8cfad = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer53924 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb70d6 = [
        
    ];

    public function getConnection()
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'getConnection', array(), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'getMetadataFactory', array(), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'getExpressionBuilder', array(), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'beginTransaction', array(), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'getCache', array(), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->getCache();
    }

    public function transactional($func)
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'transactional', array('func' => $func), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->transactional($func);
    }

    public function commit()
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'commit', array(), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->commit();
    }

    public function rollback()
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'rollback', array(), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'getClassMetadata', array('className' => $className), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'createQuery', array('dql' => $dql), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'createNamedQuery', array('name' => $name), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'createQueryBuilder', array(), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'flush', array('entity' => $entity), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'clear', array('entityName' => $entityName), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->clear($entityName);
    }

    public function close()
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'close', array(), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->close();
    }

    public function persist($entity)
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'persist', array('entity' => $entity), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'remove', array('entity' => $entity), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'refresh', array('entity' => $entity), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'detach', array('entity' => $entity), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'merge', array('entity' => $entity), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'getRepository', array('entityName' => $entityName), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'contains', array('entity' => $entity), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'getEventManager', array(), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'getConfiguration', array(), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'isOpen', array(), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'getUnitOfWork', array(), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'getProxyFactory', array(), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'initializeObject', array('obj' => $obj), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'getFilters', array(), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'isFiltersStateClean', array(), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'hasFilters', array(), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return $this->valueHolder8cfad->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? $reflection = new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer53924 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8cfad) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8cfad = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8cfad->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, '__get', ['name' => $name], $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        if (isset(self::$publicPropertiesb70d6[$name])) {
            return $this->valueHolder8cfad->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8cfad;

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

        $targetObject = $this->valueHolder8cfad;
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
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8cfad;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder8cfad;
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
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, '__isset', array('name' => $name), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8cfad;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder8cfad;
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
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, '__unset', array('name' => $name), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8cfad;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder8cfad;
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
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, '__clone', array(), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        $this->valueHolder8cfad = clone $this->valueHolder8cfad;
    }

    public function __sleep()
    {
        $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, '__sleep', array(), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;

        return array('valueHolder8cfad');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer53924 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer53924;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer53924 && ($this->initializer53924->__invoke($valueHolder8cfad, $this, 'initializeProxy', array(), $this->initializer53924) || 1) && $this->valueHolder8cfad = $valueHolder8cfad;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8cfad;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder8cfad;
    }


}
