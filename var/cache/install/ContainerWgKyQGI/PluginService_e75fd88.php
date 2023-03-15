<?php

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PluginService.php';
class PluginService_e75fd88 extends \Eccube\Service\PluginService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderfe027 = null;
    private $initializer277e2 = null;
    private static $publicPropertiesef41e = [
        
    ];
    public function install($path, $source = 0)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'install', array('path' => $path, 'source' => $source), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->install($path, $source);
    }
    public function installWithCode($code)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'installWithCode', array('code' => $code), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->installWithCode($code);
    }
    public function preInstall()
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'preInstall', array(), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->preInstall();
    }
    public function postInstall($config, $source)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'postInstall', array('config' => $config, 'source' => $source), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->postInstall($config, $source);
    }
    public function generateProxyAndUpdateSchema(\Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $saveMode = true)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'generateProxyAndUpdateSchema', array('plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'saveMode' => $saveMode), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->generateProxyAndUpdateSchema($plugin, $config, $uninstall, $saveMode);
    }
    public function generateProxyAndCallback(callable $callback, \Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $tmpProxyOutputDir = null)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'generateProxyAndCallback', array('callback' => $callback, 'plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'tmpProxyOutputDir' => $tmpProxyOutputDir), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->generateProxyAndCallback($callback, $plugin, $config, $uninstall, $tmpProxyOutputDir);
    }
    public function createTempDir()
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'createTempDir', array(), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->createTempDir();
    }
    public function deleteDirs($arr)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'deleteDirs', array('arr' => $arr), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->deleteDirs($arr);
    }
    public function unpackPluginArchive($archive, $dir)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'unpackPluginArchive', array('archive' => $archive, 'dir' => $dir), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->unpackPluginArchive($archive, $dir);
    }
    public function checkPluginArchiveContent($dir, array $config_cache = [])
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'checkPluginArchiveContent', array('dir' => $dir, 'config_cache' => $config_cache), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->checkPluginArchiveContent($dir, $config_cache);
    }
    public function readConfig($pluginDir)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'readConfig', array('pluginDir' => $pluginDir), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->readConfig($pluginDir);
    }
    public function checkSymbolName($string)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'checkSymbolName', array('string' => $string), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->checkSymbolName($string);
    }
    public function deleteFile($path)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'deleteFile', array('path' => $path), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->deleteFile($path);
    }
    public function checkSamePlugin($code)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'checkSamePlugin', array('code' => $code), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->checkSamePlugin($code);
    }
    public function calcPluginDir($code)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'calcPluginDir', array('code' => $code), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->calcPluginDir($code);
    }
    public function createPluginDir($d)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'createPluginDir', array('d' => $d), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->createPluginDir($d);
    }
    public function registerPlugin($meta, $source = 0)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'registerPlugin', array('meta' => $meta, 'source' => $source), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->registerPlugin($meta, $source);
    }
    public function callPluginManagerMethod($meta, $method)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'callPluginManagerMethod', array('meta' => $meta, 'method' => $method), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->callPluginManagerMethod($meta, $method);
    }
    public function uninstall(\Eccube\Entity\Plugin $plugin, $force = true)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'uninstall', array('plugin' => $plugin, 'force' => $force), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->uninstall($plugin, $force);
    }
    public function unregisterPlugin(\Eccube\Entity\Plugin $p)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'unregisterPlugin', array('p' => $p), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->unregisterPlugin($p);
    }
    public function disable(\Eccube\Entity\Plugin $plugin)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'disable', array('plugin' => $plugin), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->disable($plugin);
    }
    public function enable(\Eccube\Entity\Plugin $plugin, $enable = true)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'enable', array('plugin' => $plugin, 'enable' => $enable), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->enable($plugin, $enable);
    }
    public function update(\Eccube\Entity\Plugin $plugin, $path)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'update', array('plugin' => $plugin, 'path' => $path), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->update($plugin, $path);
    }
    public function updatePlugin(\Eccube\Entity\Plugin $plugin, $meta)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'updatePlugin', array('plugin' => $plugin, 'meta' => $meta), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->updatePlugin($plugin, $meta);
    }
    public function getPluginRequired($plugin)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'getPluginRequired', array('plugin' => $plugin), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->getPluginRequired($plugin);
    }
    public function findDependentPluginNeedDisable($pluginCode)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'findDependentPluginNeedDisable', array('pluginCode' => $pluginCode), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->findDependentPluginNeedDisable($pluginCode);
    }
    public function findDependentPlugin($pluginCode, $enableOnly = false)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'findDependentPlugin', array('pluginCode' => $pluginCode, 'enableOnly' => $enableOnly), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->findDependentPlugin($pluginCode, $enableOnly);
    }
    public function getDependentByCode($pluginCode, $libraryType = null)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'getDependentByCode', array('pluginCode' => $pluginCode, 'libraryType' => $libraryType), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->getDependentByCode($pluginCode, $libraryType);
    }
    public function parseToComposerCommand(array $packages, $getVersion = true)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'parseToComposerCommand', array('packages' => $packages, 'getVersion' => $getVersion), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->parseToComposerCommand($packages, $getVersion);
    }
    public function copyAssets($pluginCode)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'copyAssets', array('pluginCode' => $pluginCode), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->copyAssets($pluginCode);
    }
    public function removeAssets($pluginCode)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'removeAssets', array('pluginCode' => $pluginCode), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->removeAssets($pluginCode);
    }
    public function checkPluginExist($plugins, $pluginCode)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, 'checkPluginExist', array('plugins' => $plugins, 'pluginCode' => $pluginCode), $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        return $this->valueHolderfe027->checkPluginExist($plugins, $pluginCode);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig, $instance->entityManager, $instance->pluginRepository, $instance->entityProxyService, $instance->schemaService, $instance->composerService, $instance->container, $instance->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\PluginService')->__invoke($instance);
        $instance->initializer277e2 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\PluginRepository $pluginRepository, \Eccube\Service\EntityProxyService $entityProxyService, \Eccube\Service\SchemaService $schemaService, \Eccube\Common\EccubeConfig $eccubeConfig, \Symfony\Component\DependencyInjection\ContainerInterface $container, \Eccube\Util\CacheUtil $cacheUtil, \Eccube\Service\Composer\ComposerServiceInterface $composerService, \Eccube\Service\PluginApiService $pluginApiService, \Eccube\Service\SystemService $systemService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;
        if (! $this->valueHolderfe027) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\PluginService');
            $this->valueHolderfe027 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
        }
        $this->valueHolderfe027->__construct($entityManager, $pluginRepository, $entityProxyService, $schemaService, $eccubeConfig, $container, $cacheUtil, $composerService, $pluginApiService, $systemService, $pluginContext);
    }
    public function & __get($name)
    {
        $this->initializer277e2 && ($this->initializer277e2->__invoke($valueHolderfe027, $this, '__get', ['name' => $name], $this->initializer277e2) || 1) && $this->valueHolderfe027 = $valueHolderfe027;
        if (isset(self::$publicPropertiesef41e[$name])) {
            return $this->valueHolderfe027->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
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
