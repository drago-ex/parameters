# Drago Parameters

Malé rozšíření pro cesty k adresářům aplikace (aplikace, veřejný a dočasný adresář)
v projektu na Nette. Poskytuje jednoduchý přístup k těmto cestám přes dependency injection.

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/drago-ex/parameters/blob/main/license)
[![PHP version](https://badge.fury.io/ph/drago-ex%2Fparameters.svg)](https://badge.fury.io/ph/drago-ex%2Fparameters)
[![Tests](https://github.com/drago-ex/parameters/actions/workflows/tests.yml/badge.svg)](https://github.com/drago-ex/parameters/actions/workflows/tests.yml)
[![Coding Style](https://github.com/drago-ex/parameters/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/parameters/actions/workflows/coding-style.yml)

## Požadavky

- PHP >= 8.3, < 9
- Nette Framework
- Composer

## Instalace

```
composer require drago-ex/parameters
```

## Registrace rozšíření

Zaregistrujte rozšíření v konfiguraci neon a předejte mu adresáře:
```neon
extensions:
	- Drago\Parameters\DI\ParametersExtension(appDir: %appDir%, wwwDir: %wwwDir%, tempDir: %tempDir%)
```

Rozšíření zaregistruje jednu službu, `Drago\Parameters\Parameters`, která drží všechny tři cesty.

## Přístup k adresářům v aplikaci

Službu `Parameters` si nechte předat všude, kde cesty potřebujete:

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

- `appDir` - adresář aplikace (obvykle `app/`).
- `wwwDir` - veřejný adresář (`www/` nebo `public/`).
- `tempDir` - dočasný adresář pro cache a podobné soubory.
