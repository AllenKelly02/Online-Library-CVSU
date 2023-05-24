<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'course',
        'category',
        'description',
        'published_date'
    ];
     /**
     * Set the categories
     *
     */
    public function setCatAttribute($value)
    {
        $this->attributes['category'] = json_encode($value);
    }

    /**
     * Get the categories
     *
     */
    public function getCatAttribute($value)
    {
        return $this->attributes['category'] = json_decode($value);

    }
    public function authors(){
        return $this->belongsToMany(Author::class);
    }
    public function image () {
        return $this->hasOne(BookImage::class);
    }
    public function book_issuing(){
        return $this->hasOne(BookIssuing::class);

    }

      /**
     * Set the course
     *
     */
    public function setCourseAttribute($value)
    {
        $this->attributes['course'] = json_encode($value);
    }

    /**
     * Get the course
     *
     */
    public function getCourseAttribute($value)
    {
        return $this->attributes['course'] = json_decode($value);
    }


    public function readers()
    {
        return $this->belongsToMany(User::class, 'book_user', 'book_id', 'user_id')
            ->withTimestamps();
    }


}
