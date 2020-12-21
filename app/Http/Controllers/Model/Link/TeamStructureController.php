<?php

namespace App\Http\Controllers\Model\Link;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Model\StructureController;
use App\Http\Controllers\Model\TeamController;
use App\Model\Link\TeamStructure;
use App\Model\Structure;
use App\Model\Team;

class TeamStructureController extends Controller
{
    /**
     * @param int $id
     * @return Structure
     */
    public static function getStructureFromTeam(int $id):Structure
    {
        $structureId = TeamStructure::query()->select('structureId')->where('teamId',$id)->first()->structureId;
        return StructureController::getFromId($structureId);
    }

    /**
     * @param int $id
     * @return Team[]
     */
    public static function getTeamsFromStructure(int $id): iterable // Team[]
    {
        $allTeamsId = TeamStructure::query()->select('teamId')->where('structureId',$id)->get();
        $allTeams = array();
        foreach($allTeamsId as $oneId)
        {
            array_push($allTeams,TeamController::getFromId($oneId));
        }
        return $allTeams;
    }
}
