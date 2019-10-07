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
	private function createContainer(array $config, ?string $key = null): Container
	{
		$params = $this->container->getParameters();

		$loader = new ContainerLoader($params['tempDir'], true);

		$class = $loader->load(function (Compiler $compiler) use ($config): void {
			$compiler->addExtension('params', new \Drago\Parameters\DI\ParametersExtension(
				$config['appDir'],
				$config['wwwDir'],
				$config['tempDir']
			));
		}, $key);

		return new $class;
	}


	public function test01()
	{
		$params = $this->container->getParameters();

		$config = [
			'appDir' => $params['appDir'],
			'wwwDir' => $params['wwwDir'],
			'tempDir' => $params['tempDir'],
		];

		$container = $this->createContainer($config);

		Assert::type(Parameters::class, $container->getByType(Parameters::class));
	}
}

$extension = new ParametersExtension($container);
$extension->run();
