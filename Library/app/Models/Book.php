<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'pages', 'author_id', 'years','image'];

    public function author(){

        return $this->belongsTo(Author::class);
    }

    public function catecories(){
        return $this->belongsToMany(Category::class);
    }
}
