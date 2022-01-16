<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'post';

    public function tags(){
        return $this->belongsTo(Tags::class, 'tag_id', 'id', );
    }
}
