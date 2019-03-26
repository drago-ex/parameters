<?php declare(strict_types = 1);

/**
 * Drago Dirs
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Directory;
use Nette;

/**
 * Easier access to individual directories in an application.
 */
class Dirs
{
	use Nette\SmartObject;

	/**
	 * @var string
	 */
	private $appDir;

	/**
	 * @var string
	 */
	private $wwwDir;

	/**
	 * @var string
	 */
	private $tempDir;


	public function __construct($appDir, $wwwDir, $tempDir)
	{
		$this->appDir  = $appDir;
		$this->wwwDir  = $wwwDir;
		$this->tempDir = $tempDir;
	}


	/**
	 * Directory www.
	 */
	public function getWebDir(): string
	{
		return $this->wwwDir;
	}


	/**
	 * Directory of temporary files.
	 */
	public function getTempDir(): string
	{
		return $this->tempDir;
	}


	/**
	 * Application directory.
	 */
	public function getAppDir(): string
	{
		return $this->appDir;
	}
}
