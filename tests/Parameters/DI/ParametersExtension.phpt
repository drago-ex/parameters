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
	private function createContainer(): Container
	{
		$loader = new ContainerLoader(TempDir, true);
		$class = $loader->load(function (Compiler $compiler): void {
			$compiler->addExtension('dirs', new ParametersExtension(
				dirname(__DIR__, 3) . '/src',
				dirname(__DIR__, 3) . '/tests',
				TempDir,
			));
		});
		return new $class;
	}


	private function getParameters(): Parameters
	{
		return $this->createContainer()->getByType(Parameters::class);
	}


	public function test01(): void
	{
		Assert::type(Parameters::class, $this->getParameters());
	}


	public function test02(): void
	{
		$params = $this->getParameters();
		Assert::same(dirname(__DIR__, 3) . '/src', $params->appDir);
		Assert::same(dirname(__DIR__, 3) . '/tests', $params->wwwDir);
		Assert::same(TempDir, $params->tempDir);
	}


	public function testReadmeConfiguration(): void
	{
		$loader = new ContainerLoader(TempDir, true);
		$class = $loader->load(function (Compiler $compiler): void {
			$compiler->addExtension('extensions', new Nette\DI\Extensions\ExtensionsExtension);
			$compiler->addConfig(['parameters' => ['appDir' => '/app', 'wwwDir' => '/www', 'tempDir' => '/temp']]);
			$compiler->loadConfig(Tester\FileMock::create('
				extensions:
					- Drago\Parameters\DI\ParametersExtension(appDir: %appDir%, wwwDir: %wwwDir%, tempDir: %tempDir%)
			', 'neon'));
		}, 'readme');

		$params = (new $class)->getByType(Parameters::class);
		Assert::same(['/app', '/www', '/temp'], [$params->appDir, $params->wwwDir, $params->tempDir]);
	}
}

(new TestParametersExtension)->run();
