<?php

declare(strict_types = 1);

namespace Test\DI;

use Drago\Parameters;
use Nette\DI;
use Test\TestContainer;
use Tester\Assert;

$container = require __DIR__ . '/../../bootstrap.php';


class ParametersExtension extends TestContainer
{
	private function createContainer(): DI\Container
	{
		$params = $this->container->getParameters();
		$loader = new DI\ContainerLoader($params['tempDir'], true);

		$class = $loader->load(function (DI\Compiler $compiler) use ($params): void {
			$compiler->addExtension('params', new Parameters\DI\ParametersExtension(
				$params['appDir'],
				$params['wwwDir'],
				$params['tempDir']
			));
		});
		return new $class;
	}


	public function test01(): void
	{
		$container = $this->createContainer();
		Assert::type(Parameters\Parameters::class, $container->getByType(Parameters\Parameters::class));
	}


	public function test02(): void
	{
		$container = $this->createContainer();
		$class = $container->getByType(Parameters\Parameters::class);

		Assert::type(TYPE_STRING, $class->getTempDir());
		Assert::type(TYPE_STRING, $class->getAppDir());
		Assert::type(TYPE_STRING, $class->getWwwDir());
	}
}

$extension = new ParametersExtension($container);
$extension->run();
