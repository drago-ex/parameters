## Drago Parameters
Access to parameters in the application.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://raw.githubusercontent.com/drago-ex/parameters/master/license.md)
[![PHP version](https://badge.fury.io/ph/drago-ex%2Fparameters.svg)](https://badge.fury.io/ph/drago-ex%2Fparameters)
[![Tests](https://github.com/drago-ex/parameters/actions/workflows/tests.yml/badge.svg)](https://github.com/drago-ex/parameters/actions/workflows/tests.yml)
[![Coding Style](https://github.com/drago-ex/parameters/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/parameters/actions/workflows/coding-style.yml)
[![CodeFactor](https://www.codefactor.io/repository/github/drago-ex/parameters/badge)](https://www.codefactor.io/repository/github/drago-ex/parameters)
[![Coverage Status](https://coveralls.io/repos/github/drago-ex/parameters/badge.svg?branch=master)](https://coveralls.io/github/drago-ex/parameters?branch=master)

## Technology
- PHP 8.1 or higher
- composer

## Installation
```
composer require drago-ex/parameters
```

## Extension registration
```neon
extensions:
	- Drago\Parameters\DI\ParametersExtension(appDir: %appDir%, wwwDir: %wwwDir%, tempDir: %tempDir%)
```

## Path to application directory
```php
$this->appDir;
```

## Path to public directory
```php
$this->wwwDir;
```

## Path to temporary directory
```php
$this->tempDir;
```
