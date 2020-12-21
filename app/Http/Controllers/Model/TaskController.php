<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use App\Model\Permission;
use App\Model\Task;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class TaskController extends Controller
{
    /**
     * @param int $id
     * @return Task|array|Collection|Model
     */
    public static function getFromId(int $id): array|Collection|Model|Task //Permission
    {
        return Task::all()->find($id);
    }

    /**
     * @return Permission[]
     */
    public static function getAll(): iterable //Permission[]
    {
        return Task::all();
    }
}
