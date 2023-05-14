<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'published_year'
    ];
    public function authors(){
        return $this->belongsToMany(Author::class);
    }
    public function image () {
        return $this->hasOne(BookImage::class);
    }
    public function book_issuing(){
        return $this->hasOne(BookIssuing::class);
    }
}
