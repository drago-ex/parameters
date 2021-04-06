<?php

declare(strict_types = 1);

/**
 * Drago Extension
 * Package built on Nette Framework
 */

namespace Drago\Parameters\DI;

use Drago\Parameters\Parameters;
use Nette\DI\CompilerExtension;


/**
 * Register services.
 */
class ParametersExtension extends CompilerExtension
{
	private array $defaults = [];


	public function __construct(
		string $appDir,
		string $wwwDir,
		string $tempDir,
	) {
		$this->defaults = [
			'appDir' => $appDir,
			'wwwDir' => $wwwDir,
			'tempDir' => $tempDir,
		];
	}


	public function loadConfiguration(): void
	{
		$builder = $this->getContainerBuilder();
		$builder->addDefinition($this->prefix('dirs'))
			->setFactory(Parameters::class, $this->defaults);
	}
}
