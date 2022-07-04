<?php

namespace Cbox\LighthouseSpatiePermissions\GraphQL\Mutations;

use Cbox\LighthouseSpatiePermissions\Traits\DefaultGuard;
use Spatie\Permission\Models\Role;

class RevokePermissionToRole
{
    use DefaultGuard;

    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $role = Role::findByName($args['role']);
        $role->revokePermissionTo($args['permission'], $this->guard);

        return $role;
    }
}
