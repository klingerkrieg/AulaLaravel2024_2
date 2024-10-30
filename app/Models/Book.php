<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    public static $bookTypes = ["", 1=>"Tipo1", 2=>"Tipo2"];

        
    protected $fillable = ["title",
                            "publisher",
                            "year",
                            "date_of_something"];

}
