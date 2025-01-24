<?php

/**
 * Drago Extension
 * Package built on Nette Framework
 */

declare(strict_types=1);

namespace Drago\Parameters;


/**
 * Parameters class provides access to the main directories used in the application.
 * It is a readonly class that holds essential directory paths: application, web root, and temp directory.
 */
readonly class Parameters
{
	/**
	 * @param string $appDir The directory of the application.
	 * @param string $wwwDir The directory for the public web files (usually `www` or `public`).
	 * @param string $tempDir The directory for temporary files (e.g., cache, logs).
	 */
	public function __construct(
		public string $appDir,
		public string $wwwDir,
		public string $tempDir,
	) {
	}
}
