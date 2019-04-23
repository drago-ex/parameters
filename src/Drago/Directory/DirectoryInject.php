<?php

declare(strict_types = 1);

/**
 * Drago Dirs
 * @copyright Zdeněk Papučík
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
