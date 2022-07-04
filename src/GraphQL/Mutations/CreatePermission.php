<?php

namespace Cbox\LighthouseSpatiePermissions\GraphQL\Mutations;

use Cbox\LighthouseSpatiePermissions\Traits\DefaultGuard;
use Spatie\Permission\Models\Permission;

class CreatePermission
{
    use DefaultGuard;

    /**
     * @param null $_
     * @param array<string, mixed> $args
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
     */
    public function __invoke($_, array $args)
    {
        return Permission::create([
            'name' => $args['name'],
            'guard_name' => $this->guard,
        ]);
    }
}
