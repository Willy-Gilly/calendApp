<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Model\NotificationController;

class NotificationViewController extends ViewController
{
    public function __construct()
    {
        parent::__construct();
    }
    // url : /notification/seeAll
    public function index()
    {
        $numberFr = NotificationController::getNumberFriendRequest();
        $numberMessage = NotificationController::getNumberNewMessage();
        $numberTeamInvite = NotificationController::getNumberNewTeamInvite();
        $numberStructureinvite = NotificationController::getNumberNewStructureInvite();

        $tableFrColumns = [
            [
                "name" => 'Id'
            ],
            [
                "name" => 'Text'
            ],
            [
                "name" => 'isRead',
            ],
        ];
        $tableFrRows = self::prepareFriendRequestTable();
        $tableFr = [
            "tableId" => "friendRequestDatatable",
            "tableColumns" => $tableFrColumns,
            "tableRows" => $tableFrRows,
            "haveButton" => false,
            //"datatableButton" => [],
        ];

        $tableMessageColumns = [
            [
                "name" => 'User'
            ],
            [
                "name" => 'Date'
            ],
            [
                "name" => 'Text',
            ],
        ];
        $tableMessageRows = [];
        $tableMessage = [
            "tableId" => "messageDatatable",
            "tableColumns" => $tableMessageColumns,
            "tableRows" => $tableMessageRows,
            "haveButton" => false,
            //"datatableButton" => [],
        ];

        $tableTeamInviteColumns = [
            [
                "name" => 'User'
            ],
            [
                "name" => 'Date'
            ],
            [
                "name" => 'Text',
            ],
        ];
        $tableTeamInviteRows = [];
        $tableTeamInvite = [
            "tableId" => "teamInviteDatatable",
            "tableColumns" => $tableTeamInviteColumns,
            "tableRows" => $tableTeamInviteRows,
            "haveButton" => false,
            //"datatableButton" => [],
        ];

        $tableStructureInviteColumns = [
            [
                "name" => 'User'
            ],
            [
                "name" => 'Date'
            ],
            [
                "name" => 'Text',
            ],
        ];
        $tableStructureInviteRows = [];
        $tableStructureInvite = [
            "tableId" => "structureInviteDatatable",
            "tableColumns" => $tableStructureInviteColumns,
            "tableRows" => $tableStructureInviteRows,
            "haveButton" => false,
            //"datatableButton" => [],
        ];

        $data = [
            "numberFr" => $numberFr,
            "numberMessage" => $numberMessage,
            "numberTeamInvite" => $numberTeamInvite,
            "numberStructureInvite" => $numberStructureinvite,
            "tables" => [
                "tableFr" => $tableFr,
                "tableMessage" => $tableMessage,
                "tableTeamInvite" => $tableTeamInvite,
                "tableStructureInvite" => $tableStructureInvite,
            ]
        ];

        return view('notifications', $data);
    }
    // url : /notification/config
    public function config()
    {
        return view('layouts.blank');
    }

    public static function prepareFriendRequestTable()
    {
        $data = NotificationController::getFriendRequests();
        $arr = [];
        foreach ($data as $oneLine)
        {
            array_push($arr,[
                "id" => "friendRequestRow_".$oneLine["id"],
                "data" => [
                    ["id" => "friendRequestRow_idRow_".$oneLine["id"],
                        "text" => $oneLine["id"]],
                    ["id" => "friendRequestRow_textRow_".$oneLine["id"],
                        "text" => $oneLine["textDisplayed"]],
                    ["id" => "friendRequestRow_isReadRow_".$oneLine["id"],
                        "text" => $oneLine["isRead"]],
                ]]);
        }
        return $arr;
    }
}
