<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model {

    protected $table = 'contents';

    protected $fillable = [
        "page_id",
        "title",
        "short_text",
        "description",
        "section",
        "part",
        "sort",
        "link",
        "pic",
        "video",
        "status",
    ];

    public function page() {
        return $this->belongsTo('App\Models\Page','page_id')->first(['title']);
    }

}
