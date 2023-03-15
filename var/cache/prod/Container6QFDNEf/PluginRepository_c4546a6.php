<?php

include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/PluginRepository.php';
class PluginRepository_c4546a6 extends \Eccube\Repository\PluginRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderfe027 = null;
    private $initializer277e2 = null;
    private static $publicPropertiesef41e = [
        
    ];
    public function findAllEnabled()
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'findAllEnabled', array(), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->findAllEnabled();
    }
    public function findByCode($code)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'findByCode', array('code' => $code), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->findByCode($code);
    }
    public function delete($entity)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'delete', array('entity' => $entity), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->delete($entity);
    }
    public function save($entity)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'save', array('entity' => $entity), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->save($entity);
    }
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->createQueryBuilder($alias, $indexBy);
    }
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->createResultSetMappingBuilder($alias);
    }
    public function createNamedQuery($queryName)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->createNamedQuery($queryName);
    }
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->createNativeNamedQuery($queryName);
    }
    public function clear()
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'clear', array(), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->clear();
    }
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->find($id, $lockMode, $lockVersion);
    }
    public function findAll()
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'findAll', array(), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->findAll();
    }
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->findBy($criteria, $orderBy, $limit, $offset);
    }
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->findOneBy($criteria, $orderBy);
    }
    public function count(array $criteria)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'count', array('criteria' => $criteria), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->count($criteria);
    }
    public function __call($method, $arguments)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->__call($method, $arguments);
    }
    public function getClassName()
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'getClassName', array(), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->getClassName();
    }
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'matching', array('criteria' => $criteria), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->matching($criteria);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig, $instance->_entityName, $instance->_em, $instance->_class);
        $instance->initializer277e2 = $initializer;
        return $instance;
    }
    public function __construct(\Symfony\Bridge\Doctrine\RegistryInterface $registry)
    {
        static $reflection;
        if (! $this->valueHolderfe027) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Repository\\PluginRepository');
            $this->valueHolderfe027 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
        }
        $this->valueHolderfe027->__construct($registry);
    }
    public function & __get($name)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, '__get', ['name' => $name], $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        if (isset(self::$publicPropertiesef41e[$name])) {
            return $this->valueHolderfe027->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfe027;
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
        $targetObject = $this->valueHolderfe027;
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
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfe027;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderfe027;
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
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, '__isset', array('name' => $name), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfe027;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderfe027;
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
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, '__unset', array('name' => $name), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfe027;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderfe027;
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
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, '__clone', array(), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        $this->valueHolderfe027 = clone $this->valueHolderfe027;
    }
    public function __sleep()
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, '__sleep', array(), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return array('valueHolderfe027');
    }
    public function __wakeup()
    {
        unset($this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer277e2 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer277e2;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'initializeProxy', array(), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfe027;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfe027;
    }
}
