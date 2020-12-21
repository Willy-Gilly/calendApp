<?php

namespace App\Http\Controllers\Model\Invitation;

use App\Http\Controllers\Controller;
use App\Model\Invitation\TeamInvitation;
use Illuminate\Support\Facades\Auth;

class TeamInvitationController extends Controller
{
    public function getAuthInvitation()
    {
        $id = Auth::id();
        $arr = TeamInvitation::query()->select('*')->where([['userId',"=",$id],["isAccepted","=",false]])->get()->all();
        if(!empty($arr))
        {
            return $arr;
        }
        else
        {
            return false;
        }
    }
}
