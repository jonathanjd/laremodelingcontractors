<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
        'title',
        'permalink',
        'body',
        'img_url',
        'img_name',
        'seo_title',
        'seo_description',
        'keywords',
        'status',
        'visibility',
        'user_id',
        'deleted_by'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
