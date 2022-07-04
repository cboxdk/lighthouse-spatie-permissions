<?php

namespace Cbox\LighthouseSpatiePermissions;

use Nuwave\Lighthouse\Events\BuildSchemaString;
use Nuwave\Lighthouse\Events\RegisterDirectiveNamespaces;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LighthouseSpatiePermissionsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name('lighthouse-spatie-permissions')
            ->hasConfigFile();

    }

    public function packageBooted()
    {
        $this->publishes([
            $this->package->basePath("../graphql/permission.graphql") => base_path("graphql/permission.graphql"),
        ], "{$this->package->shortName()}-graphql");

        app('events')->listen(
            BuildSchemaString::class,
            function (): string {
                if (config('lighthouse-spatie-permissions.schema')) {
                    return file_get_contents(config('lighthouse-spatie-permissions.schema'));
                }

                return file_get_contents($this->package->basePath("../graphql/permission.graphql"));
            }
        );

        app('events')->listen(
            RegisterDirectiveNamespaces::class,
            function () {
                return ['Cbox\\LighthouseSpatiePermissions\\GraphQL\\Directives'];
            },
        );
    }
}
