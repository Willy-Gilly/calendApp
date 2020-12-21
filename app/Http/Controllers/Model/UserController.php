<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class UserController extends Controller
{
    /**
     * @param int $id
     * @return User|array|Collection|Model
     */
    public static function getFromId(int $id): array|Collection|Model|User //Permission
    {
        return User::all()->find($id);
    }

    /**
     * @return User[]
     */
    public static function getAll(): iterable //Permission[]
    {
        return User::all();
    }
}
