<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[   //this variable is used to store vo column names jinki value will gonna create and store  through controller by Category::create() method and if any column is not mentioned in this fillable array then it will not insert the value and also show error of not adding that column in fillable 
        'name',
        'description'
    ];
}
