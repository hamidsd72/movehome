<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

    protected $table = 'pages';

    protected $fillable = [
        "title",
        "status",
    ];

    public function contents() {
        return $this->hasMany('App\Models\Content','page_id','id')->count();
    }
}
