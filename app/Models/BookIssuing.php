<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookIssuing extends Model
{
    use HasFactory;

    protected $fillable = [
        'return_date',
        'borrowed_date',
        'user_id',
        'book_id'
    ];


    public function book () {

        return $this->belongsTo(Book::class);

    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
