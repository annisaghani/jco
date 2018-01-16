<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function tasklists()
    {
        return $this->hasMany(Tasklist::class);
    }

    public function members()
    {
        return $this->belongsToMany(User::class);
    }
}
