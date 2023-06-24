<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable=[
        'name',
        'email',
        'contact',
        'place',
        'image',
        

    ];
    protected $primaryKey='customer_id';
    use HasFactory;
}
