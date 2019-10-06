<?php

declare(strict_types = 1);

use Drago\Parameters\ParametersExtension;
use Drago\Parameters\Directory;
use Nette\DI\ContainerLoader;
use Nette\DI\Compiler;
use Nette\DI\Container;
use Tester\Assert;

require __DIR__ . '/bootstrap.php';

test(function (): void {
	$loader = new ContainerLoader(getTempDir(), true);
	$class = $loader->load(function (Compiler $compiler): void {
		$compiler->addExtension('directory', new ParametersExtension);
	});

	/** @var Container $container */
	$container = new $class();
	Assert::type(Directory::class, $container->getByType(Directory::class));
});
