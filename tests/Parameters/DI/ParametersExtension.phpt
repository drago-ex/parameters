<?php

declare(strict_types = 1);

use Tester\Assert;

$container = require __DIR__ . '/../../bootstrap.php';


class ParametersExtension extends TestContainer
{
	private function createContainer(): Nette\DI\Container
	{
		$params = $this->container->getParameters();
		$loader = new Nette\DI\ContainerLoader($params['tempDir'], true);

		$class = $loader->load(function (Nette\DI\Compiler $compiler) use ($params): void {
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
		$class = $this->createContainer()->getByType(Drago\Parameters\Parameters::class);
		Assert::type(Drago\Parameters\Parameters::class, $class);
	}


	public function test02(): void
	{
		$container = $this->createContainer();
		$class = $container->getByType(Drago\Parameters\Parameters::class);

		Assert::type(TYPE_STRING, $class->getTempDir());
		Assert::type(TYPE_STRING, $class->getAppDir());
		Assert::type(TYPE_STRING, $class->getWwwDir());
	}
}

$extension = new ParametersExtension($container);
$extension->run();
