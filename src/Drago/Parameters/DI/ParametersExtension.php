<?php

/**
 * Drago Extension
 * Package built on Nette Framework
 */

declare(strict_types=1);

namespace Drago\Parameters\DI;

use Drago\Parameters\Parameters;
use Nette\DI\CompilerExtension;


/**
 * CompilerExtension for registering the Parameters service in the DI container.
 * This extension automatically injects application directory paths into the Parameters class.
 */
class ParametersExtension extends CompilerExtension
{
	/** @var array Default parameters for the directories (appDir, wwwDir, tempDir). */
	private array $defaults;


	/**
	 * @param string $appDir The application directory path.
	 * @param string $wwwDir The web directory path (public directory).
	 * @param string $tempDir The temporary directory path (cache, logs).
	 */
	public function __construct(
		readonly string $appDir,
		readonly string $wwwDir,
		readonly string $tempDir,
	) {
		// Initialize the default directory paths
		$this->defaults = [
			'appDir' => $appDir,
			'wwwDir' => $wwwDir,
			'tempDir' => $tempDir,
		];
	}


	/**
	 * Registers the Parameters service in the DI container.
	 * The service provides access to the application's directory paths.
	 */
	public function loadConfiguration(): void
	{
		$builder = $this->getContainerBuilder();

		// Register Parameters service with the default directory paths
		$builder->addDefinition($this->prefix('dirs'))
			->setFactory(Parameters::class, $this->defaults);
	}
}
