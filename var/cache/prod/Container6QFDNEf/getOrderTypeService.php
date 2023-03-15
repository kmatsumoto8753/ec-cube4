<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Form\Type\Admin\OrderType' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Form/Type/Admin/OrderType.php';

return $this->privates['Eccube\\Form\\Type\\Admin\\OrderType'] = new \Eccube\Form\Type\Admin\OrderType(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['Eccube\\Common\\EccubeConfig'] ?? ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))), ($this->privates['Eccube\\Service\\OrderStateMachine'] ?? $this->load('getOrderStateMachineService.php')), ($this->privates['Eccube\\Repository\\Master\\OrderStatusRepository'] ?? $this->load('getOrderStatusRepositoryService.php')));
