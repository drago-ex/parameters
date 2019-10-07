<?php

declare(strict_types = 1);

namespace Test\Parameters;

use Test\TestCaseAbstract;
use Tester\Assert;

$container = require __DIR__ . '/../bootstrap.php';


class Parameters extends TestCaseAbstract
{
	public function test01()
	{
		$params = $this->container->getParameters();
		$parameters = new \Drago\Parameters\Parameters(
			$params['appDir'],
			$params['wwwDir'],
			$params['tempDir']
		);
		Assert::type('string', $parameters->getAppDir());
		Assert::type('string', $parameters->getWwwDir());
		Assert::type('string', $parameters->getTempDir());
	}
}

$class = new Parameters($container);
$class->run();
