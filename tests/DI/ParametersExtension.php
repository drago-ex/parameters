<?php

declare(strict_types = 1);

use Drago\Parameters\Parameters;
use Drago\Parameters\DI\ParametersExtension;
use Nette\DI\Compiler;
use Nette\DI\Container;
use Nette\DI\ContainerLoader;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


test(function (): void {
	$loader = new ContainerLoader(getTempDir(), true);
	$class = $loader->load(function (Compiler $compiler): void {
		$compiler->addExtension('params', new ParametersExtension);
	});

	/** @var Container $container */
	$container = new $class;
	Assert::type(Parameters::class, $container->getByType(Parameters::class));
});
