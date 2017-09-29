## Drago Dirs

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/c4e704cb7bb04cdc83335fd17fefeb81)](https://www.codacy.com/app/accgit/dirs?utm_source=github.com&utm_medium=referral&utm_content=drago-ex/dirs&utm_campaign=badger)

Snadnější přístup k jednotlivým adresářům.

## Registrace rozšíření

```
extensions:

	# Snadnější přístup k jednotlivým adresářům.
	dirs: Drago\Directory\DirsExtension
```

## Adresář www

```php
$this->getWebDir();
```

## Adresář dočasných souborů (cache a temporary)

```php
$this->getTempDir();
```

## Adreséř aplikace

```php
$this->getAppDir();
```
