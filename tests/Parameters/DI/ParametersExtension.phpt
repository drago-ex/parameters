<?php

/**
 * Test: Drago\Parameters\DI\ParametersExtension
 */

declare(strict_types=1);

use Drago\Parameters\DI\ParametersExtension;
use Drago\Parameters\Parameters;
use Nette\DI\Compiler;
use Nette\DI\Container;
use Nette\DI\ContainerLoader;
use Tester\Assert;
use Tester\TestCase;

$container = require __DIR__ . '/../../bootstrap.php';


class TestParametersExtension extends TestCase
{
	protected Container $container;


	public function __construct(Container $container)
	{
		$this->container = $container;
	}


	private function createContainer(): Container
	{
		$params = $this->container->getParameters();
		$loader = new ContainerLoader($params['tempDir'], true);
		$class = $loader->load(function (Compiler $compiler) use ($params): void {
			$compiler->addExtension('dirs', new ParametersExtension(
				$params['appDir'],
				$params['wwwDir'],
				$params['tempDir'],
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
		Assert::type('string', $this->geClassByType()->getTempDir());
		Assert::type('string', $this->geClassByType()->getAppDir());
		Assert::type('string', $this->geClassByType()->getWwwDir());
	}
}

(new TestParametersExtension($container))->run();
