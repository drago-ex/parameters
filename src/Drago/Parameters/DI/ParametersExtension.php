<?php

declare(strict_types = 1);

/**
 * Drago Extension
 * Package built on Nette Framework
 */

namespace Drago\Parameters\DI;

use Drago;
use Nette;


/**
 * Register services.
 */
class ParametersExtension extends Nette\DI\CompilerExtension
{
	/** @var array */
	private $defaults = [];


	public function __construct(string $appDir, string $wwwDir, string $tempDir)
	{
		$this->defaults = [
			'appDir' => $appDir,
			'wwwDir' => $wwwDir,
			'tempDir' => $tempDir,
		];
	}


	public function loadConfiguration(): void
	{
		$builder = $this->getContainerBuilder();
		$builder->addDefinition($this->prefix('params'))
			->setFactory(Drago\Parameters\Parameters::class, $this->defaults);
	}
}
