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
	/** @var string Directory path for the application (typically the root directory of your app). */
	public string $appDir;

	/** @var string Directory path for the web root (typically the public HTML directory). */
	public string $wwwDir;

	/** @var string Directory path for temporary files (e.g., cache or logs). */
	public string $tempDir;
}
