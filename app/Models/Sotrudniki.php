<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sotrudniki extends Model
{
    use HasFactory;



    public function odeli()
    {
        return $this->belongsToMany(Odeli::class,'odel_sotrudniks');
    }

    protected $fillable=[
        'Name',
        'Familiya',
        'otchestvo  ',
        'Jins',
        'Z_Plata',
        'Otdeli'

    ];
}
