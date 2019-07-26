<?php

namespace Memo\SimplePackage\Test;

use Memo\SimplePackage\SimplePackageFacade;
use Memo\SimplePackage\SimplePackageServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            SimplePackageServiceProvider::class,
        ];
    }

    /**
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'SimplePackage' => SimplePackageFacade::class,
        ];
    }
}
