<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Repository\Master\CustomerOrderStatusRepository' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/Master/CustomerOrderStatusRepository.php';

return $this->privates['Eccube\\Repository\\Master\\CustomerOrderStatusRepository'] = new \Eccube\Repository\Master\CustomerOrderStatusRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
