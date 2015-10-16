## Dirs
Easier access to individual directories.

## Instruction
Inject the class to Presenter and use
```php
$this->dirs->getPublicDir();
...
```

Add the configuration file:
```neon
extensions:
	dirs: Drago\Application\Directories\DirsExtension
```
