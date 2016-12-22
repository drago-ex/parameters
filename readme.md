## Drago Dirs

Easier access to individual directories.

## Instruction

Inject the class to presenter and use:

```php
// Web directory
$this->dirs->getWebDir();

// Temporary directory
$this->dirs->getTempDir();

// App directory
$this->dirs->getAppDir();
```

Add the configuration file:

```yaml
extensions:
	dirs: Drago\Directory\DirsExtension
```
