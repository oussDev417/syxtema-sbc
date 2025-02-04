<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\ImageUpload;
use App\Instagram;
use App\Category;
use App\Client;
use App\Comment;
use App\Audio;

class Post extends Model
{

    use Sluggable;
    /**********************************************************
     * Return the sluggable configuration array for this model.
     *
     * @return array
    **********************************************************/
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'Title_en'
            ]
        ];
    }

    /**************************************************
     * The attributes that are mass assignable.
     * @var array
     **************************************************/
    protected $fillable = [
    'author_id', 'category_id','Instagram_id',
    'Title_ar','Title_fr','Title_en',
    'body_fr','body_en','body_ar','ImageUpload_id',
    'slug','featured','price','hours','map','video'
    ];

    // THIS function Category 
     public function Category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function ImageUpload()
    {
        return $this->belongsTo(ImageUpload::class,'ImageUpload_id');
    }

    // THIS function Comment TO MAKE RELATHION
    public function Comments()
    {
        return $this->hasMany('App\Comment');
    }

}
