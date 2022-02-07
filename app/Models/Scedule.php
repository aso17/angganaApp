<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scedule extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'IN', 'Out', 'location_In', 'location_Out', 'idEmployees'];
}