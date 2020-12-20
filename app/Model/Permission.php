<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = "calenderpermission";

    protected $fillable = [
        "permissionType", /* from user on structure : 0
                            from team on structure : 1
                            from team on team : 2
                            from user on team : 3
                            from structure on team : 4
                            from team on user : 5
                            from structure on user : 6 */
        "fromId", "onId", //  can be user, team or structure depending on the type
        "permissionValue", /*  0 : manage + (manage including the "to" 's secret datas) (risky)
                               1 : manage (attribution, invitation, moving)
                               2 : self (nothing except self action) */
        "created_at", "updated_at"
    ];
}
