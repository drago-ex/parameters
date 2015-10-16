<?php

/**
 * This file is part of the Drago Framework
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Application\Directories;
use Nette;

/**
 * Easier access to individual directories.
 * @author Zdeněk Papučík
 */
class Dirs extends Nette\Object
{
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
	 * Public directory.
	 * @return string
	 */
	public function getPublicDir()
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
	 * Modules directory.
	 * @return string
	 */
	public function getModulesDir()
	{
		return $this->appDir . '/modules';
	}

	/**
	 * Cache directory.
	 * @return string
	 */
	public function getCacheDir()
	{
		return $this->tempDir . '/cache';
	}

}
