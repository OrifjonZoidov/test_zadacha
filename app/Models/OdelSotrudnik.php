<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OdelSotrudnik extends Model
{
    use HasFactory;
    protected $fillable=
[
    'odeli_id',
    'sotrudniki_id'
        ];
}
