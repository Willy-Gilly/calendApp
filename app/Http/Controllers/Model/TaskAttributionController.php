<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use App\Model\TaskAttribution;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class TaskAttributionController extends Controller
{
    /**
     * @param int $id
     * @return TaskAttribution|array|Collection|Model
     */
    public static function getFromId(int $id): array|Collection|Model|TaskAttribution //TaskAttribution
    {
        return TaskAttribution::all()->find($id);
    }

    /**
     * @return TaskAttribution[]
     */
    public static function getAll(): iterable //TaskAttribution[]
    {
        return TaskAttribution::all();
    }
}
