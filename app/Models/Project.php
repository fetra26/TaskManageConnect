<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['team_id', 'name', 'description','deadline']; // Add your fields

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
