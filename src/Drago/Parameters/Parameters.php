<?php

declare(strict_types=1);

namespace Drago\Parameters;


readonly class Parameters
{
	public function __construct(
		public string $appDir,
		public string $wwwDir,
		public string $tempDir,
	) {
	}
}
