<?php

/**
 * Drago Dirs
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Directory;
use Nette;

/**
 * Snadnější přístup k jednotlivým adresářům.
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
	 * Adresář www.
	 * @return string
	 */
	public function getWebDir()
	{
		return $this->wwwDir;
	}

	/**
	 * Adresář dočasných souborů (cache a temporary).
	 * @return string
	 */
	public function getTempDir()
	{
		return $this->tempDir;
	}

	/**
	 * Adreséř aplikace.
	 * @return string
	 */
	public function getAppDir()
	{
		return $this->appDir;
	}

}
