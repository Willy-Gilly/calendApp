<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use App\Model\Message;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class MessageController extends Controller
{
    /**
     * @param int $id
     * @return Message|array|Collection|Model
     */
    public static function getFromId(int $id): array|Collection|Model|Message
    {
        return Message::all()->find($id);
    }

    /**
     * @param int $id -> User ID
     * @param bool $isRead
     * @return Message|array|Collection|Model
     */
    public static function getMyMessages(int $id, bool $isRead = false): array|Collection|Model|Message
    {
        return Message::query()->select()->where([['isTeamChat',"=",false],["isRead","=",$isRead],["isStructureChat","=",false], ["userTo","=",$id]])->get();
    }

    /**
     * @param int $id -> Team ID
     * @param bool $isRead
     * @return Message|array|Collection|Model
     */
    public static function getTeamMessages(int $id, bool $isRead = false): array|Collection|Model|Message
    {
        return Message::query()->select()->where([['isTeamChat',"=",true],["isRead","=",$isRead],["isStructureChat","=",false], ["userTo","=",$id]])->get();
    }

    /**
     * @param int $id -> Structure ID
     * @param bool $isRead
     * @return Message|array|Collection|Model
     */
    public static function getStructureMessages(int $id, bool $isRead = false): array|Collection|Model|Message
    {
        return Message::query()->select()->where([['isTeamChat',"=",false],["isRead","=",$isRead],["isStructureChat","=",true], ["userTo","=",$id]])->get();
    }
}
