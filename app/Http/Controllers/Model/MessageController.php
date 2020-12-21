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
}
