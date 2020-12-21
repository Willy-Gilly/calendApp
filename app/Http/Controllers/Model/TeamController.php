<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use App\Model\Team;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class TeamController extends Controller
{
    /**
     * @param int $id
     * @return Team|array|Collection|Model
     */
    public static function getFromId(int $id): array|Collection|Model|Team //Team
    {
        return Team::all()->find($id);
    }

    /**
     * @return Team[]
     */
    public static function getAll(): iterable //Team[]
    {
        return Team::all();
    }
}
