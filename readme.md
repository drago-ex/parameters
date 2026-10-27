# Drago Parameters

A lightweight extension for managing application directory paths (such as application, public, and temporary directories)
within a Nette-based project. Provides a simple way to access these paths via dependency injection.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/drago-ex/parameters/blob/main/license)
[![PHP version](https://badge.fury.io/ph/drago-ex%2Fparameters.svg)](https://badge.fury.io/ph/drago-ex%2Fparameters)
[![Tests](https://github.com/drago-ex/parameters/actions/workflows/tests.yml/badge.svg)](https://github.com/drago-ex/parameters/actions/workflows/tests.yml)
[![Coding Style](https://github.com/drago-ex/parameters/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/parameters/actions/workflows/coding-style.yml)

## Requirements

- PHP >= 8.3, < 9
- Nette Framework
- Composer

## Installation

```
composer require drago-ex/parameters
```

## Extension Registration

Register the extension in your neon configuration and pass the directories:
```neon
extensions:
	- Drago\Parameters\DI\ParametersExtension(appDir: %appDir%, wwwDir: %wwwDir%, tempDir: %tempDir%)
```

The extension registers one service, `Drago\Parameters\Parameters`, which holds the three paths.

## Accessing Directories in Your Application

Inject the `Parameters` service wherever you need the paths:

```php
use Drago\Parameters\Parameters;

final class ImageStorage
{
	public function __construct(
		private readonly Parameters $parameters,
	) {
	}


	public function getUploadDir(): string
	{
		return $this->parameters->wwwDir . '/uploads';
	}
}
```

- `appDir` - the application directory (usually `app/`).
- `wwwDir` - the public directory (`www/` or `public/`).
- `tempDir` - the temporary directory for cache and similar files.
