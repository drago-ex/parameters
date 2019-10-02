<?php

declare(strict_types = 1);

/**
 * Drago Parameters
 * Package built on Nette Framework
 */

namespace Drago\Parameters;

use Nette\DI\CompilerExtension;


/**
 * Register services.
 * @package Drago\Parameters
 */
class ParametersExtension extends CompilerExtension
{
	public function loadConfiguration(): void
	{
		$builder = $this->getContainerBuilder();
		$params = $builder->parameters;
		$builder
			->addDefinition($this->prefix('Directory'))
			->setFactory(Directory::class, [
				$params['appDir'],
				$params['wwwDir'],
				$params['tempDir'],
				$params['vendorDir'],
			]);
	}
}
