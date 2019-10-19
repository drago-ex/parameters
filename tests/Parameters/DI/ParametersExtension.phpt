<?php

declare(strict_types = 1);

namespace Test\DI;

use Drago;
use Drago\Parameters\Parameters;
use Nette\DI\Compiler;
use Nette\DI\Container;
use Nette\DI\ContainerLoader;
use Test\TestContainer;
use Tester\Assert;

$container = require __DIR__ . '/../../bootstrap.php';


class ParametersExtension extends TestContainer
{
	private function createContainer(): Container
	{
		$params = $this->container->getParameters();
		$loader = new ContainerLoader($params['tempDir'], true);

		$class = $loader->load(function (Compiler $compiler) use ($params): void {
			$compiler->addExtension('params', new Drago\Parameters\DI\ParametersExtension(
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
		Assert::type(Parameters::class, $container->getByType(Parameters::class));
	}


	public function test02(): void
	{
		$container = $this->createContainer();
		$class = $container->getByType(Parameters::class);

		Assert::type(TYPE_STRING, $class->getTempDir());
		Assert::type(TYPE_STRING, $class->getAppDir());
		Assert::type(TYPE_STRING, $class->getWwwDir());
	}
}

$extension = new ParametersExtension($container);
$extension->run();
