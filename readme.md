## Drago Dirs

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/c4e704cb7bb04cdc83335fd17fefeb81)](https://www.codacy.com/app/accgit/dirs?utm_source=github.com&utm_medium=referral&utm_content=drago-ex/dirs&utm_campaign=badger)

Easier access to individual directories in an application.

## Requirements

- PHP 5.6 or higher
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
