<?php

namespace App\Models;

use Laratrust\Models\LaratrustTeam;

class Team extends LaratrustTeam
{
    public $guarded = [];

    public function users()
    {
        return $this->morphToMany(User::class, 'team_user');
    }
}
