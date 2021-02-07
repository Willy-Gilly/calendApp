<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use App\Model\Friendlist;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class FriendlistController extends Controller
{
    /**
     * @param int $id
     * @return Friendlist|array|Collection|Model
     */
    public static function getFromId(int $id): array|Collection|Model|Friendlist // Friendlist
    {
        return Friendlist::all()->find($id);
    }

    /**
     * @return Friendlist[]
     */
    public static function getAll(): iterable // Friendlist[]
    {
        return Friendlist::all();
    }

    /**
     * @param int $id
     * @return Friendlist[]|Collection|Model|array
     */
    public static function getAllFromUser(int $id): array|Collection|Model|Friendlist // Friendlist[]
    {
        return Friendlist::query()->select()->where([['userOne',"=",$id],["isAccepted","=",true]])->orWhere([['userTwo',"=",$id],["isAccepted","=",true]])->get();
    }
}
