<?php

/**
 * This file is part of the Drago Framework
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Application\Directories;
use Nette;

/**
 * Handing the system dependencies container.
 * @author Zdeněk Papučík
 */
class DirsExtension extends Nette\DI\CompilerExtension
{
	/**
	 * @var array
	 */
	public $defaults  = [
		'appDir'  => '%appDir%',
		'wwwDir'  => '%wwwDir%',
		'tempDir' => '%tempDir%',
	];

	public function loadConfiguration()
	{
		$conf = $this->getConfig($this->defaults);
		$this->getContainerBuilder()
			->addDefinition($this->prefix('directories'))
			->setClass('Drago\Application\Directories\Dirs', [$conf['appDir'], $conf['wwwDir'], $conf['tempDir']]);
	}

}
