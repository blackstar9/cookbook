<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Recepy extends Model
{

    protected $fillable = ['title','content', 'description'];

    public function ingridients()
    {
        return $this->belongsToMany(
             Ingridient::class,
            'recepy_ingridients',
            'recepy_id',
            'ingridient_id'
        );
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function add($fields)
    {
        $post = new static;
        $post->fill($fields);
        $post->user_id = Auth::user()->id;
        $post->save();

        return $post;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function remove()
    {
        $this->delete();
    }

    public function setIngridients($ids)
    {
        if($ids == null){return;}

        $this->ingridients()->sync($ids);
    }

}
