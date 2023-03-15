<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Eccube\Controller\Admin\Store\OwnerStoreController' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractController.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Store/OwnerStoreController.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Util/CacheUtil.php';

$this->services['Eccube\\Controller\\Admin\\Store\\OwnerStoreController'] = $instance = new \Eccube\Controller\Admin\Store\OwnerStoreController(($this->services['Eccube\\Repository\\PluginRepository'] ?? $this->load('getPluginRepositoryService.php')), ($this->services['Eccube\\Service\\PluginService'] ?? $this->load('getPluginServiceService.php')), ($this->privates['Eccube\\Service\\Composer\\ComposerServiceInterface'] ?? $this->load('getComposerServiceInterfaceService.php')), ($this->services['Eccube\\Service\\SystemService'] ?? $this->getSystemServiceService()), ($this->privates['Eccube\\Service\\PluginApiService'] ?? $this->load('getPluginApiServiceService.php')), ($this->privates['Eccube\\Repository\\BaseInfoRepository'] ?? $this->getBaseInfoRepositoryService()), ($this->privates['Eccube\\Util\\CacheUtil'] ?? ($this->privates['Eccube\\Util\\CacheUtil'] = new \Eccube\Util\CacheUtil(($this->services['kernel'] ?? $this->get('kernel', 1)), $this))));

$instance->setEccubeConfig(($this->services['Eccube\\Common\\EccubeConfig'] ?? ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))));
$instance->setEntityManager(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
$instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));
$instance->setSession(($this->services['session'] ?? $this->getSessionService()));
$instance->setFormFactory(($this->services['form.factory'] ?? $this->load('getForm_FactoryService.php')));
$instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

return $instance;
