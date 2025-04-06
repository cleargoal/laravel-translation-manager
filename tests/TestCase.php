<?php

namespace Cleargoal\TranslationManager\Tests;

use Cleargoal\TranslationManager\ManagerServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * @param \Illuminate\Foundation\Application $app
     * @return string[]
     */
    protected function getPackageProviders($app)
    {
        return [ManagerServiceProvider::class];
    }
}
