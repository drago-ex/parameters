<?php

declare(strict_types=1);

namespace Drago\Parameters\DI;

use Drago\Parameters\Parameters;
use Nette\DI\CompilerExtension;


class ParametersExtension extends CompilerExtension
{
	public function __construct(
		public readonly string $appDir,
		public readonly string $wwwDir,
		public readonly string $tempDir,
	) {
	}


	public function loadConfiguration(): void
	{
		$builder = $this->getContainerBuilder();

		$builder->addDefinition($this->prefix('dirs'))
			->setFactory(Parameters::class, [
				'appDir' => $this->appDir,
				'wwwDir' => $this->wwwDir,
				'tempDir' => $this->tempDir,
			]);
	}
}
