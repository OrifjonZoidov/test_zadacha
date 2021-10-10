<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable=[
        'name',
        'price',
    ];
    /**
     * @var mixed|string
     */
    private $unique_id;
    /**
     * @var mixed
     */

    use HasFactory;
}
