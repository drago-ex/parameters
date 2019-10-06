<?php

declare(strict_types = 1);

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

	/** @var string */
	private $appDir;

	/** @var string */
	private $wwwDir;

	/** @var string */
	private $tempDir;

	/** @var string */
	private $vendorDir;


	public function __construct(string $appDir, string $wwwDir, string $tempDir, string $vendorDir)
	{
		$this->appDir = $appDir;
		$this->wwwDir = $wwwDir;
		$this->tempDir = $tempDir;
		$this->vendorDir = $vendorDir;
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


	/**
	 * Path to vendor directory.
	 */
	public function getVendorDir(): string
	{
		return $this->vendorDir;
	}
}
