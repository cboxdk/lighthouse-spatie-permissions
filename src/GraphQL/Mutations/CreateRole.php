<?php

namespace Cbox\LighthouseSpatiePermissions\GraphQL\Mutations;

use Cbox\LighthouseSpatiePermissions\Traits\DefaultGuard;
use Spatie\Permission\Models\Role;

class CreateRole
{
    use DefaultGuard;

    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        return Role::create([
            'name' => $args['name'],
            'guard_name' => $this->guard,
        ]);
    }
}
