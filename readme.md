## Dirs
Easier access to individual directories.

## Instruction
Inject the class to Presenter and use
```php
// Public directory
$this->dirs->getPublicDir();

// Temporary directory
$this->dirs->getTempDir();

// Cache directory
$this->dirs->getCacheDir();

// Modules directory
$this->dirs->getModulesDir();
```

Add the configuration file:
```yaml
extensions:
	dirs: Drago\Application\Directories\DirsExtension
```
