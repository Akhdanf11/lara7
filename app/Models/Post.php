<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // public function scopeLatestFirst(){
    //     return $this->latest()->get();
    // }

    protected $fillable = ['title','slug', 'body'];

    // protected $guarded = [];
}
