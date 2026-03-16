<?php

declare(strict_types=1);

namespace EnterpriseAlxtexh\FilamentModuleManager\Exceptions;

use Exception;

class ModuleNotFoundException extends Exception
{
    public function __construct(string $moduleName)
    {
        parent::__construct("Module '{$moduleName}' not found.");
    }
}
