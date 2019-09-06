<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amount extends Model
{
    public function ingridients()
    {
        return $this->belongsToMany(
            Ingridient::class,
            'ingridient_amounts',
            'amount_id',
            'ingridient_id'
        );
    }
}
