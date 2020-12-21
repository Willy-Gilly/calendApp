<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use App\Model\Period;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class PeriodController extends Controller
{
    /**
     * @param int $id
     * @return Period|array|Collection|Model
     */
    public static function getFromId(int $id): array|Collection|Model|Period // Period
    {
        return Period::all()->find($id);
    }

    /**
     * @return Period[]
     */
    public static function getAll(): iterable // Period[]
    {
        return Period::all();
    }
}
