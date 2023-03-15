<?php

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/Composer/ComposerServiceInterface.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/Composer/ComposerApiService.php';
class ComposerApiService_c77e330 extends \Eccube\Service\Composer\ComposerApiService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderfe027 = null;
    private $initializer277e2 = null;
    private static $publicPropertiesef41e = [
        
    ];
    public function execInfo($pluginName, $version)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'execInfo', array('pluginName' => $pluginName, 'version' => $version), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->execInfo($pluginName, $version);
    }
    public function execRequire($packageName, $output = null)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'execRequire', array('packageName' => $packageName, 'output' => $output), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->execRequire($packageName, $output);
    }
    public function execRemove($packageName, $output = null)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'execRemove', array('packageName' => $packageName, 'output' => $output), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->execRemove($packageName, $output);
    }
    public function execUpdate($dryRun, $output = null)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'execUpdate', array('dryRun' => $dryRun, 'output' => $output), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->execUpdate($dryRun, $output);
    }
    public function execInstall($dryRun, $output = null)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'execInstall', array('dryRun' => $dryRun, 'output' => $output), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->execInstall($dryRun, $output);
    }
    public function foreachRequires($packageName, $version, $callback, $typeFilter = null, $level = 0)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'foreachRequires', array('packageName' => $packageName, 'version' => $version, 'callback' => $callback, 'typeFilter' => $typeFilter, 'level' => $level), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->foreachRequires($packageName, $version, $callback, $typeFilter, $level);
    }
    public function execConfig($key, $value = null)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'execConfig', array('key' => $key, 'value' => $value), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->execConfig($key, $value);
    }
    public function getConfig()
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'getConfig', array(), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->getConfig();
    }
    public function setWorkingDir($workingDir)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'setWorkingDir', array('workingDir' => $workingDir), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->setWorkingDir($workingDir);
    }
    public function runCommand($commands, $output = null, $init = true)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'runCommand', array('commands' => $commands, 'output' => $output, 'init' => $init), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->runCommand($commands, $output, $init);
    }
    public function configureRepository(\Eccube\Entity\BaseInfo $BaseInfo)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'configureRepository', array('BaseInfo' => $BaseInfo), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->configureRepository($BaseInfo);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($instance);
        $instance->initializer277e2 = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Common\EccubeConfig $eccubeConfig, \Eccube\Repository\BaseInfoRepository $baseInfoRepository, \Eccube\Service\SchemaService $schemaService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;
        if (! $this->valueHolderfe027) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
            $this->valueHolderfe027 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($this);
        }
        $this->valueHolderfe027->__construct($eccubeConfig, $baseInfoRepository, $schemaService, $pluginContext);
    }
    public function & __get($name)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, '__get', ['name' => $name], $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        if (isset(self::$publicPropertiesef41e[$name])) {
            return $this->valueHolderfe027->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        unset($this->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($this);
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
