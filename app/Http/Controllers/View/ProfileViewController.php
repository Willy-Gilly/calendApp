<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Model\FriendlistController;
use App\Http\Controllers\Model\Link\UserStructureController;
use App\Http\Controllers\Model\Link\UserTeamController;
use App\Http\Controllers\Model\UserController;
use App\Model\Link\UserStructure;
use App\Model\Link\UserTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileViewController extends ViewController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(int $userId = null)
    {
        if(is_null($userId))
        {
            $userId = Auth::id();
        }
        $attributes = UserController::getFromId($userId)->getAttributes();
        $profilePicture = $attributes["profilePicture"];
        if(is_null($profilePicture))
        {
            $profilePicture = "/image/default-profile-picture.png";
        }
        else
        {
            $profilePicture = "/image/profilePicture/".$profilePicture;
        }

        $friendlistCount  = FriendlistController::getAllFromUser($userId)->count();
        $structureJoinedCount = count(UserStructureController::getStructuresFromUser($userId));
        $teamJoinedCount = count(UserTeamController::getTeamsFromUser($userId));

        $data = [
            "profilePicture" => $profilePicture,
            "name" => strtoupper($attributes["lastname"]) . " " . ucwords($attributes["firstname"]),
            "pseudo" => ucfirst($attributes["pseudo"]),
            "friendlistCount" => $friendlistCount,
            "structureJoinedCount" => $structureJoinedCount,
            "teamJoinedCount" => $teamJoinedCount,
            "description" => $attributes["description"],
        ];
        return view('profile',$data);
    }
}
