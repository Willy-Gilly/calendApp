<?php

namespace App\Http\Controllers\Model\Link;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Model\StructureController;
use App\Http\Controllers\Model\UserController;
use App\Model\Link\UserStructure;
use App\Model\Structure;
use App\User;

class UserStructureController extends Controller
{
    /**
     * @param int $id
     * @return Structure[]
     */
    public static function getStructuresFromUser(int $id): iterable //Structure[]
    {
        $structuresId = UserStructure::query()->select('structureId')->where('userId',$id)->get();
        $structures = array();
        foreach($structuresId as $oneId)
        {
            array_push($structures,StructureController::getFromId($oneId));
        }
        return $structures;
    }

    /**
     * @param int $id
     * @return User[]
     */
    public static function getUsersFromStructure(int $id): iterable // User[]
    {
        $usersId = UserStructure::query()->select('teamId')->where('structureId',$id)->get();
        $users = array();
        foreach($usersId as $oneId)
        {
            array_push($users,UserController::getFromId($oneId));
        }
        return $users;
    }
}
