<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingridient extends Model
{
    protected $fillable = ['title'];

    public function recepies()
    {
        return $this->belongsToMany(
             Recepy::class,
            'recepy_ingridients',
            'ingridient_id',
            'recepy_id'
        );
    }

    public function amounts()
    {
        return $this->belongsToMany(
            Amount::class,
            'ingridient_amounts',
            'ingridient_id',
            'amount_id'
        );
    }
}
