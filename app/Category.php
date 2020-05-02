<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{   
    protected $fillable = [
       'name', 'category_id', 'slug'
    ];
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    public function childrenCategories()
  {
    return $this->hasMany(Category::class)->with('categories');
  }
  public function articles(){
    return $this->belongsToMany(Article::class)->withTimestamps();
  }
}
