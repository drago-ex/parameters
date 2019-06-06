## Drago Parameters

Access to parameters in the application.

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
