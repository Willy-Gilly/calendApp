<?php

namespace App\Http\Controllers\Model\Link;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Model\TeamController;
use App\Http\Controllers\Model\UserController;
use App\Model\Link\UserTeam;
use App\Model\Team;
use App\User;

class UserTeamController extends Controller
{
    /**
     * @param int $id
     * @return Team[]
     */
    public static function getTeamsFromUser(int $id): iterable //Team[]
    {
        $teamsId = UserTeam::query()->select('teamId')->where('userId',$id)->get();
        $teams = array();
        foreach($teamsId as $oneId)
        {
            array_push($teams,TeamController::getFromId($oneId));
        }
        return $teams;
    }

    /**
     * @param int $id
     * @return User[]
     */
    public static function getUsersFromTeam(int $id): iterable // User[]
    {
        $usersId = UserTeam::query()->select('userId')->where('teamId',$id)->get();
        $users = array();
        foreach($usersId as $oneId)
        {
            array_push($users,UserController::getFromId($oneId));
        }
        return $users;
    }
}
