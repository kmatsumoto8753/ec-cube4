<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Repository\PaymentOptionRepository' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/PaymentOptionRepository.php';

return $this->privates['Eccube\\Repository\\PaymentOptionRepository'] = new \Eccube\Repository\PaymentOptionRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
