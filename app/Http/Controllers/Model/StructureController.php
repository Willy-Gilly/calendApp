<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use App\Model\Structure;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class StructureController extends Controller
{
    /**
     * @param int $id
     * @return Structure|array|Collection|Model
     */
    public static function getFromId(int $id): array|Collection|Model|Structure //Structure
    {
        return Structure::all()->find($id);
    }

    /**
     * @return Structure[]
     */
    public static function getAll(): iterable //Structure[]
    {
        return Structure::all();
    }
}
