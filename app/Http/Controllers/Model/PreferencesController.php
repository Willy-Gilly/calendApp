<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use App\Model\Preferences;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class PreferencesController extends Controller
{
    /**
     * @param int $id
     * @return Preferences|array|Collection|Model
     */
    public static function getFromId(int $id): array|Collection|Model|Preferences //Preferences
    {
        return Preferences::all()->find($id);
    }

    /**
     * @return Preferences[]
     */
    public static function getAll(): iterable //Preferences[]
    {
        return Preferences::all();
    }
}
