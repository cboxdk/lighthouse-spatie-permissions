<?php

namespace Cbox\LighthouseSpatiePermissions\GraphQL\Mutations;

use App\Models\User;
use Cbox\LighthouseSpatiePermissions\Traits\DefaultGuard;

class GivePermissionToUser
{
    use DefaultGuard;

    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $user = User::find($args['user_id']);
        $user->givePermissionTo($args['permission'], $this->guard);

        return $user;
    }
}
