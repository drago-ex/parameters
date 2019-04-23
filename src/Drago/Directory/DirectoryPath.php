<?php

declare(strict_types = 1);

/**
 * Drago Dirs
 * @copyright Zdeněk Papučík
 */
namespace Drago\Dirs;

use Nette\SmartObject;

/**
 * Access to individual directories in the application.
 * @package Drago\Dirs
 */
class DirectoryPath
{
	use SmartObject;

	/** @var string */
	private $appDir;

	/** @var string */
	private $wwwDir;

	/** @var string */
	private $tempDir;


	public function __construct($appDir, $wwwDir, $tempDir)
	{
		$this->appDir  = $appDir;
		$this->wwwDir  = $wwwDir;
		$this->tempDir = $tempDir;
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
