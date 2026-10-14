<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable('name' , 'price' ,'category','description')]
class Product extends Model
{
    //
}
