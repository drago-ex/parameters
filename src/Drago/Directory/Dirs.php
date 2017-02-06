<?php

/**
 * Extending for Nette Framework.
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Directory;
use Nette;

/**
 * Easier access to individual directories.
 * @author Zdeněk Papučík
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
	 * Web directory.
	 * @return string
	 */
	public function getWebDir()
	{
		return $this->wwwDir;
	}

	/**
	 * Temporary directory.
	 * @return string
	 */
	public function getTempDir()
	{
		return $this->tempDir;
	}

	/**
	 * App directory.
	 * @return string
	 */
	public function getAppDir()
	{
		return $this->appDir;
	}

}
