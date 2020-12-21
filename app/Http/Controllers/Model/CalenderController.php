<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use App\Model\Calender;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CalenderController extends Controller
{
    /**
     * @param int $id
     * @return Calender|array|Collection|Model
     */
    public static function getFromId(int $id): array|Collection|Model|Calender
    {
        return Calender::all()->find($id);
    }

    /**
     * @return Calender[]
     */
    public static function getAll(): iterable //Calender[]
    {
        return Calender::all();
    }
}
