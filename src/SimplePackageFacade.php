<?php

namespace Memo\SimplePackage;

use Illuminate\Support\Facades\Facade;

class SimplePackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'simple-package';
    }
}
