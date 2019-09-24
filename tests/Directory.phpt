<?php

declare(strict_types = 1);

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

$parameters = new \Drago\Parameters\Directory('/app', '/www', '/temp', '/vendor');

Assert::type('string', $parameters->getAppDir());
Assert::type('string', $parameters->getWwwDir());
Assert::type('string', $parameters->getTempDir());
Assert::type('string', $parameters->getVendorDir());
