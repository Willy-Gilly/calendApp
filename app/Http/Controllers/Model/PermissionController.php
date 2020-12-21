<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use App\Model\Permission;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class PermissionController extends Controller
{
    /**
     * @param int $id
     * @return Permission|array|Collection|Model
     */
    public static function getFromId(int $id): array|Collection|Model|Permission //Permission
    {
        return Permission::all()->find($id);
    }

    /**
     * @return Permission[]
     */
    public static function getAll(): iterable //Permission[]
    {
        return Permission::all();
    }
}
