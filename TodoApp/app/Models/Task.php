<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'is_completed', 'user_id'];

    public function user(){

        return $this->belongsTo(User::class);
    }

    

}
