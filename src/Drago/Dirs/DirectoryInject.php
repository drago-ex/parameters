<?php

declare(strict_types = 1);

/**
 * Drago Dirs
 * Package built on Nette Framework
 */
namespace Drago\Dirs;


/**
 * Access to individual directories in the application.
 * @package Drago\Dirs
 */
trait DirectoryInject
{
	/** @var DirectoryPath */
	private $directoryPath;


	public function injectDirectoryPath(DirectoryPath $directoryPath): DirectoryPath
	{
		$this->directoryPath = $directoryPath;
		return $this->directoryPath;
	}
}
