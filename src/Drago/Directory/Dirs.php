<?php

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
	 * @return string
	 */
	public function getWebDir()
	{
		return $this->wwwDir;
	}

	/**
	 * Directory of temporary files.
	 * @return string
	 */
	public function getTempDir()
	{
		return $this->tempDir;
	}

	/**
	 * Application directory.
	 * @return string
	 */
	public function getAppDir()
	{
		return $this->appDir;
	}

}
