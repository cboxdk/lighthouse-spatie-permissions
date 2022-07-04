<?php

namespace Cbox\LighthouseSpatiePermissions\Traits;

trait DifferentPermissions {

    public function getAllPermissionsAttribute()
    {
        return $this->getAllPermissions();
    }

    public function getDirectPermissionsAttribute()
    {
        return $this->getDirectPermissions();
    }

    public function getRolePermissionsAttribute()
    {
        return $this->getPermissionsViaRoles();
    }
}
