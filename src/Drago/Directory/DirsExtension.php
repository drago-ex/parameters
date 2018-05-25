<?php

// Enable strict mode.
declare(strict_types = 1);

/**
 * Drago Dirs
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Drago\Directory;
use Nette;

/**
 * Adding dependencies to the system container.
 */
class DirsExtension extends Nette\DI\CompilerExtension
{
	/** @var array */
	public $defaults  = [
		'appDir'  => '%appDir%',
		'wwwDir'  => '%wwwDir%',
		'tempDir' => '%tempDir%',
	];


	public function loadConfiguration(): void
	{
		$conf = $this->getConfig($this->defaults);
		$this->getContainerBuilder()
			->addDefinition($this->prefix('directory'))
			->setClass('Drago\Directory\Dirs', [$conf['appDir'], $conf['wwwDir'], $conf['tempDir']]);
	}

}
