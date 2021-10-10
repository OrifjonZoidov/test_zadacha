<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odeli extends Model
{
    public function Sotrudniki()
    {
        return $this->belongsToMany(Sotrudniki::class, 'odel_sotrudniks');
    }

    use HasFactory;
}
