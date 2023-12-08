<?php

/**
 * Drago Extension
 * Package built on Nette Framework
 */

declare(strict_types=1);

namespace Drago\Parameters;


/**
 * Access to individual directories in the application.
 */
class Parameters
{
	public function __construct(
		public readonly string $appDir,
		public readonly string $wwwDir,
		public readonly string $tempDir,
	) {
	}
}
