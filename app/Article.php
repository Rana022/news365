<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{   
    protected $fillable = [
        'title','category','tag','status','is_approve', 'body','quote','image',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function articleCategories(){
        return $this->belongsToMany(Category::class)->withTimestamps();
    }
    public function articleTags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
