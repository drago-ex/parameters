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
		$loader = new ContainerLoader(TempDir, true);
		$class = $loader->load(function (Compiler $compiler): void {
			$compiler->loadConfig(Tester\FileMock::create('
			services:
				- Nette\Http\UrlScript
				- Nette\Http\Request(@Nette\Http\UrlScript)
				- Nette\Http\Response
				- Nette\Http\Session(@Nette\Http\Request, @Nette\Http\Response)
			', 'neon'));
			$compiler->addExtension('dirs', new ParametersExtension(
				dirname(__DIR__, 3) . '/src',
				dirname(__DIR__, 3) . '/tests',
				TempDir,
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
		Assert::type('string', $this->geClassByType()->tempDir);
		Assert::type('string', $this->geClassByType()->appDir);
		Assert::type('string', $this->geClassByType()->wwwDir);
	}
}

(new TestParametersExtension($container))->run();
