<?php

declare(strict_types=1);

/**
 * Drago Extension
 * Package built on Nette Framework
 */

namespace Drago\Parameters;

use Nette\SmartObject;


/**
 * Access to individual directories in the application.
 */
class Parameters
{
	use SmartObject;

	public function __construct(
		public string $appDir,
		public string $wwwDir,
		public string $tempDir,
	) {
	}


	/**
	 * Path to application directory.
	 */
	public function getAppDir(): string
	{
		return $this->appDir;
	}


	/**
	 * Path to public directory.
	 */
	public function getWwwDir(): string
	{
		return $this->wwwDir;
	}


	/**
	 * Path to temporary directory.
	 */
	public function getTempDir(): string
	{
		return $this->tempDir;
	}
}
