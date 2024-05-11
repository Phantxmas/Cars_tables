<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    protected $fillable=['id', 'reg_number','brand','model','owner_id'];


    public function courses(){
        return $this->hasMany(Models::class);
    }
}
