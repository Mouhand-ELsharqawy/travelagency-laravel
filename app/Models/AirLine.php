<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirLine extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'code', 'name', 'country', 'description']; 
    public function flight(){
        $this->hasMany(Flight::class);
    }
}