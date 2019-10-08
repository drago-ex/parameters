<?php

declare(strict_types = 1);

namespace Test\Parameters;

use Drago;
use Test\TestCaseAbstract;
use Tester\Assert;

$container = require __DIR__ . '/../bootstrap.php';


class Parameters extends TestCaseAbstract
{
	public function test01()
	{
		$class = $this->container->getByType(Drago\Parameters\Parameters::class);

		Assert::type('string', $class->getAppDir());
		Assert::type('string', $class->getWwwDir());
		Assert::type('string', $class->getTempDir());
	}
}

$class = new Parameters($container);
$class->run();
