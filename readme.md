## Drago Dirs

Easier access to individual directories in an application.

## Requirements

- PHP 7.2 or higher
- composer

## Installation

```
composer require drago-ex/dirs
```

## Register the extension

```
extensions:

	# easier access to individual directories in an application
	dirs: Drago\Directory\DirsExtension
```

## Directory www

```php
$this->getWebDir();
```

## Directory of temporary files

```php
$this->getTempDir();
```

## Application directory

```php
$this->getAppDir();
```
