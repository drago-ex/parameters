## Drago Parameters
A lightweight extension for managing application directory paths (such as application, public, and temporary directories)
within a Nette-based project. Provides a simple way to access these paths via dependency injection.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://raw.githubusercontent.com/drago-ex/parameters/master/license)
[![PHP version](https://badge.fury.io/ph/drago-ex%2Fparameters.svg)](https://badge.fury.io/ph/drago-ex%2Fparameters)
[![Tests](https://github.com/drago-ex/parameters/actions/workflows/tests.yml/badge.svg)](https://github.com/drago-ex/parameters/actions/workflows/tests.yml)
[![Coding Style](https://github.com/drago-ex/parameters/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/parameters/actions/workflows/coding-style.yml)
[![CodeFactor](https://www.codefactor.io/repository/github/drago-ex/parameters/badge)](https://www.codefactor.io/repository/github/drago-ex/parameters)
[![Coverage Status](https://coveralls.io/repos/github/drago-ex/parameters/badge.svg?branch=master)](https://coveralls.io/github/drago-ex/parameters?branch=master)

## Requirements
- PHP >= 8.3
- Nette Framework
- Composer

## Installation
```
composer require drago-ex/parameters
```

## Extension registration
To enable the Parameters extension in your Nette project, add the following configuration to your neon file. This registers
the `ParametersExtension` and injects paths to the application, public, and temporary directories.
```neon
extensions:
	- Drago\Parameters\DI\ParametersExtension(appDir: %appDir%, wwwDir: %wwwDir%, tempDir: %tempDir%)
```
This will automatically inject the directory paths as services into your project.

## Accessing Directories in Your Application
Once registered, you can access the directory paths throughout your application using the following properties:

## Application Directory
To get the path to your application's directory (usually the root directory of your app), use:
```php
$this->appDir;
```

## Public Directory
To get the path to your public directory (e.g., the `www` or `public` directory):
```php
$this->wwwDir;
```

## Temporary Directory
To get the path to the temporary directory (where cache or logs might be stored):
```php
$this->tempDir;
```
