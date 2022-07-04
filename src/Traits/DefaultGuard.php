<?php

namespace Cbox\LighthouseSpatiePermissions\Traits;

trait DefaultGuard
{
    public $guard;

    public function __construct()
    {
        $this->guard = config('lighthouse-spatie-permission.guard');
    }
}
