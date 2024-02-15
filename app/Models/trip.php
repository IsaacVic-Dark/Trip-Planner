<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $table='activity';
    protected $fillable = ['name', 'email', 'contact', 'location', 'image', 'description'];

}
