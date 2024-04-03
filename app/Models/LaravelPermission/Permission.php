<?php

namespace App\Models\LaravelPermission;

use App\UuidTrait;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Permission as SpatiePermission;


class Permission extends SpatiePermission
{
    use HasFactory;
    use HasUuids;
    use UuidTrait;

    protected $primaryKey = "id";
}
