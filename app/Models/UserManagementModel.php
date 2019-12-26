<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class UserManagementModel extends Model
{
    use HasRoles;

    protected $table = 'users';
}
