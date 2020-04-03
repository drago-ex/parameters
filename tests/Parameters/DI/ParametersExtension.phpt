<?php

declare(strict_types = 1);

use Drago\Parameters\Parameters;
use Nette\DI;
use Tester\Assert;

$container = require __DIR__ . '/../../bootstrap.php';


class ParametersExtension extends TestContainer
{
	private function createContainer(): DI\Container
	{
		$params = $this->container->getParameters();
		$loader = new DI\ContainerLoader($params['tempDir'], true);
		$class = $loader->load(function (DI\Compiler $compiler) use ($params): void {
			$compiler->addExtension('params', new Drago\Parameters\DI\ParametersExtension(
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

$extension = new ParametersExtension($container);
$extension->run();
