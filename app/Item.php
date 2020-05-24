<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // public function storage() {
    //     return $this->belongsTo('App\Storage');
    // }

    protected $fillable = [
        "name",
        "location",
        "qty",
        "image"
        // "storage_id"
    ];
}
