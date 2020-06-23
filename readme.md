<p align="center">
  <img src="https://avatars0.githubusercontent.com/u/11717487?s=400&u=40ecb522587ebbcfe67801ccb6f11497b259f84b&v=4" width="100" alt="logo">
</p>

<h3 align="center">Drago Extension</h3>
<p align="center">Extension for Nette Framework</p>

## Drago Parameters
Access to parameters in the application.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://raw.githubusercontent.com/drago-ex/parameters/master/license.md)
[![PHP version](https://badge.fury.io/ph/drago-ex%2Fparameters.svg)](https://badge.fury.io/ph/drago-ex%2Fparameters)
[![Build Status](https://travis-ci.org/drago-ex/parameters.svg?branch=master)](https://travis-ci.org/drago-ex/parameters)
[![CodeFactor](https://www.codefactor.io/repository/github/drago-ex/parameters/badge)](https://www.codefactor.io/repository/github/drago-ex/parameters)
[![Coverage Status](https://coveralls.io/repos/github/drago-ex/parameters/badge.svg?branch=master)](https://coveralls.io/github/drago-ex/parameters?branch=master)

## Technology
- PHP 7.4 or higher
- composer

## Installation
```
composer require drago-ex/parameters
```

## Extension registration
```php
extensions:
	- Drago\Parameters\DI\ParametersExtension(%appDir%, %wwwDir%, %tempDir%)
```

## Path to application directory
```php
$this->getAppDir();
```

## Path to public directory
```php
$this->getWwwDir();
```

## Path to temporary directory
```php
$this->getTempDir();
```
