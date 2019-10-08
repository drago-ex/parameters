<?php

declare(strict_types = 1);

namespace Test\DI;

use Drago\Parameters\Parameters;
use Nette\DI\Compiler;
use Nette\DI\Container;
use Nette\DI\ContainerLoader;
use Test\TestCaseAbstract;
use Tester\Assert;

$container = require __DIR__ . '/../../bootstrap.php';


class ParametersExtension extends TestCaseAbstract
{
	private function createContainer(): Container
	{
		$params = $this->container->getParameters();

		$loader = new ContainerLoader($params['tempDir'], true);

		$class = $loader->load(function (Compiler $compiler) use ($params): void {
			$compiler->addExtension('params', new \Drago\Parameters\DI\ParametersExtension(
				$params['appDir'],
				$params['wwwDir'],
				$params['tempDir']
			));
		});

		return new $class;
	}


	public function test01()
	{
		$container = $this->createContainer();

		Assert::type(Parameters::class, $container->getByType(Parameters::class));
	}
}

$extension = new ParametersExtension($container);
$extension->run();
