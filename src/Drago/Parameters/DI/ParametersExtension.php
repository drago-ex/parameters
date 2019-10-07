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
	private $defaults = [];


	public function __construct($appDir, $wwwDir, $tempDir)
	{
		$this->defaults = [
			'appDir' => $appDir,
			'wwwDir' => $wwwDir,
			'tempDir' => $tempDir
		];
	}


	public function loadConfiguration(): void
	{
		$builder = $this->getContainerBuilder();
		$builder
			->addDefinition($this->prefix('params'))
			->setFactory(Parameters::class, $this->defaults);
	}
}
