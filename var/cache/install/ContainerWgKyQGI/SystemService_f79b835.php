<?php

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/SystemService.php';
class SystemService_f79b835 extends \Eccube\Service\SystemService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderfe027 = null;
    private $initializer277e2 = null;
    private static $publicPropertiesef41e = [
        
    ];
    public function getDbversion()
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'getDbversion', array(), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->getDbversion();
    }
    public function canSetMemoryLimit($memory)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'canSetMemoryLimit', array('memory' => $memory), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->canSetMemoryLimit($memory);
    }
    public function getMemoryLimit()
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'getMemoryLimit', array(), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->getMemoryLimit();
    }
    public function switchMaintenance($isEnable = false, $mode = 'auto_maintenance', bool $force = false)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'switchMaintenance', array('isEnable' => $isEnable, 'mode' => $mode, 'force' => $force), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->switchMaintenance($isEnable, $mode, $force);
    }
    public function getMaintenanceToken() : ?string
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'getMaintenanceToken', array(), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->getMaintenanceToken();
    }
    public function disableMaintenanceEvent(\Symfony\Component\HttpKernel\Event\PostResponseEvent $event)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'disableMaintenanceEvent', array('event' => $event), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->disableMaintenanceEvent($event);
    }
    public function enableMaintenance($mode = 'auto_maintenance', bool $force = false) : void
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'enableMaintenance', array('mode' => $mode, 'force' => $force), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        $this->valueHolderfe027->enableMaintenance($mode, $force);
return;
    }
    public function disableMaintenance($mode = 'auto_maintenance')
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'disableMaintenance', array('mode' => $mode), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->disableMaintenance($mode);
    }
    public function disableMaintenanceNow($mode = 'auto_maintenance', bool $force = false) : void
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'disableMaintenanceNow', array('mode' => $mode, 'force' => $force), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        $this->valueHolderfe027->disableMaintenanceNow($mode, $force);
return;
    }
    public function isMaintenanceMode()
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'isMaintenanceMode', array(), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->isMaintenanceMode();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->entityManager, $instance->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $instance, 'Eccube\\Service\\SystemService')->__invoke($instance);
        $instance->initializer277e2 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        static $reflection;
        if (! $this->valueHolderfe027) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\SystemService');
            $this->valueHolderfe027 = $reflection->newInstanceWithoutConstructor();
        unset($this->entityManager, $this->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);
        }
        $this->valueHolderfe027->__construct($entityManager, $container);
    }
    public function & __get($name)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, '__get', ['name' => $name], $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        if (isset(self::$publicPropertiesef41e[$name])) {
            return $this->valueHolderfe027->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
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
        unset($this->entityManager, $this->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);
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
