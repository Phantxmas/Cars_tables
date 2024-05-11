<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    use HasFactory;
    protected $fillable=['name'];
    /**
     * @var mixed
     */
    protected $name;

    public function Cars(){
        return $this->belongsTo(Cars::class);
    }
}
