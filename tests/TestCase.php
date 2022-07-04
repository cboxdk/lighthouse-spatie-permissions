<?php

namespace Cbox\LighthouseSpatiePermissions\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Cbox\LighthouseSpatiePermissions\LighthouseSpatiePermissionsServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Cbox\\LighthouseSpatiePermissions\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LighthouseSpatiePermissionsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_lighthouse-spatie-permissions_table.php.stub';
        $migration->up();
        */
    }
}
