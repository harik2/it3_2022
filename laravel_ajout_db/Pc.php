<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pc extends Model
{
    use HasFactory;
    protected $table="pcs";
    protected $fillable=['libelle','prix'];
    //Pc::all() => select * from pcs

}
