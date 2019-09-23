<p align="center">
  <img src="https://avatars0.githubusercontent.com/u/11717487?s=400&u=40ecb522587ebbcfe67801ccb6f11497b259f84b&v=4" width="100" alt="logo">
</p>

<h3 align="center">Drago</h3>
<p align="center">Simple packages built on Nette Framework</p>

## Info

Access to parameters in the application.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://raw.githubusercontent.com/drago-ex/parameters/master/license.md)
[![PHP version](https://badge.fury.io/ph/drago-ex%2Fparameters.svg)](https://badge.fury.io/ph/drago-ex%2Fparameters)
[![CodeFactor](https://www.codefactor.io/repository/github/drago-ex/parameters/badge)](https://www.codefactor.io/repository/github/drago-ex/parameters)

## Requirements

- PHP 7.1 or higher
- composer

## Installation

```
composer require drago-ex/parameters
```

## Register extension

```
extensions:
	- Drago\Parameters\ParametersExtension
```

and in presenter use inject class.

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

## Path to vendor directory

```php
$this->getVendorDir();
```

## Current application environment

```php
$this->isProduction();
```
