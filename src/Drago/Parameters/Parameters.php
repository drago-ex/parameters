<?php

declare(strict_types=1);

namespace Drago\Parameters;


/** Provides access to the main directory paths used in the application. */
readonly class Parameters
{
	public function __construct(
		public string $appDir,
		public string $wwwDir,
		public string $tempDir,
	) {
	}
}
