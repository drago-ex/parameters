<?php

declare(strict_types = 1);

use Drago\Parameters\DI\ParametersExtension;
use Drago\Parameters\Parameters;
use Nette\DI\Compiler;
use Nette\DI\Container;
use Nette\DI\ContainerLoader;
use Tester\Assert;

$container = require __DIR__ . '/../../bootstrap.php';

class TestParametersExtension extends TestContainer
{
	private function createContainer(): Container
	{
		$params = $this->container->getParameters();
		$loader = new ContainerLoader($params['tempDir'], true);
		$class = $loader->load(function (Compiler $compiler) use ($params): void {
			$compiler->addExtension('dirs', new ParametersExtension(
				$params['appDir'],
				$params['wwwDir'],
				$params['tempDir']
			));
		});
		return new $class;
	}


	private function geClassByType(): Parameters
	{
		return $this->createContainer()
			->getByType(Parameters::class);
	}


	public function test01(): void
	{
		Assert::type(Parameters::class, $this->geClassByType());
	}


	public function test02(): void
	{
		Assert::type(TYPE_STRING, $this->geClassByType()->getTempDir());
		Assert::type(TYPE_STRING, $this->geClassByType()->getAppDir());
		Assert::type(TYPE_STRING, $this->geClassByType()->getWwwDir());
	}
}

$extension = new TestParametersExtension($container);
$extension->run();
