<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veri extends Model
{
    use HasFactory;

    protected $table = "veriler";
    public $timestamps = "false";
    protected $fillable = [

    
        "namelastname",
        "email"

    ];
}
