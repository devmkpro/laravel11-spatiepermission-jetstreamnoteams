<?php

namespace App\Models\LaravelPermission;

use App\UuidTrait;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    use HasFactory;
    use UuidTrait;
    use HasUuids;
    protected $primaryKey = "id";

}
