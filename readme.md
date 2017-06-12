## Drago Dirs

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/e82f3c049601445b9613c53fc168e00d)](https://www.codacy.com/app/zdenek.papucik/dirs?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=drago-ex/dirs&amp;utm_campaign=Badge_Grade)

Easier access to individual directories.

## Instruction

Add the configuration file:

```
extensions:

	# Easier access to individual directories.
	dirs: Drago\Directory\DirsExtension
```

Inject the class to presenter and use:

```php
// Web directory
$this->dirs->getWebDir();

// Temporary directory
$this->dirs->getTempDir();

// App directory
$this->dirs->getAppDir();
```
