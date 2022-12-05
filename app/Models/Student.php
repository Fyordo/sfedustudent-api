<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'is_headman',
        'group_id'
    ];


    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
