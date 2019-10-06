<?php

declare(strict_types = 1);

use Drago\Parameters\Parameters;

use Tester\Assert;

require __DIR__ . '/bootstrap.php';

$class = new Parameters('appDir', 'wwwDir', 'tempDir', 'vendorDir');

Assert::type('string', $class->getAppDir());
Assert::type('string', $class->getWwwDir());
Assert::type('string', $class->getTempDir());
Assert::type('string', $class->getVendorDir());
