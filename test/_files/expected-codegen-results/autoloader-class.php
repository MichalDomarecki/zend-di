<?php
/**
 * Generated autoloader for Zend\Di
 */

namespace ZendTest\Di\Generated;

use function spl_autoload_register;
use function spl_autoload_unregister;

class Autoloader
{
    private $registered = false;
    private $classmap = [
        'FooClass' => 'FooClass.php',
        'Bar\\Class' => 'Bar/Class.php',
    ];

    public function register() : void
    {
        if (! $this->registered) {
            spl_autoload_register($this);
            $this->registered = true;
        }
    }

    public function unregister() : void
    {
        if ($this->registered) {
            spl_autoload_unregister($this);
            $this->registered = false;
        }
    }

    public function load(string $class) : void
    {
        if (isset($this->classmap[$class])) {
            include __DIR__ . '/' . $this->classmap[$class];
        }
    }

    public function __invoke(string $class) : void
    {
        $this->load($class);
    }
}
