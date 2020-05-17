<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    public function item() {
        return $this->hasMany('App\Storage');
    }

    protected $fillable = [
        "item_id",
        "location"
    ];
}
