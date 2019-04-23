## Drago Dirs

Access to individual directories in the application.

## Requirements

- PHP 7.1 or higher
- composer

## Installation

```
composer require drago-ex/dirs
```

## Register services

```
services:
	- Drago\Dirs\DirectoryPath(%appDir%, %wwwDir%, %tempDir%)
```

We inject the service in the presenter.

```php
/** @var Drago\Dirs\DirectoryPath @inject */
public $directoryPath;
```

Or use Trait.

```php
use Drago\Dirs\DirectoryPath;
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
