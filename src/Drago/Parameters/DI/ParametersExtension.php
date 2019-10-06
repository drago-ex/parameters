<?php

declare(strict_types = 1);

/**
 * Drago Extension
 * Package built on Nette Framework
 */

namespace Drago\Parameters;

use Nette\DI\CompilerExtension;


/**
 * Register services.
 */
class ParametersExtension extends CompilerExtension
{
	public function loadConfiguration(): void
	{
		$builder = $this->getContainerBuilder();
		$params = $builder->parameters;
		$builder
			->addDefinition($this->prefix('directory'))
			->setFactory(Directory::class, [
				$params['appDir'],
				$params['wwwDir'],
				$params['tempDir'],
				$params['vendorDir'],
			]);
	}
}
