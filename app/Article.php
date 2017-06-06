<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";
    protected $fillable = ['title', 'content', 'user_id', 'category_id', 'path', 'tags'];

    public function setPathAttribute($path)
    {
        if(!empty($path))
        {
            $nombre = $path->getClientOriginalName();
            $this->attributes['path'] = $nombre;
            \Storage::disk('local')->put($nombre, \File::get($path));
        }
    }


    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function user()
    {
    	return $this->belongsTo('App\user');
    }
}
