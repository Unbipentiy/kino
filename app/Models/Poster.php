<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
    use HasFactory;
    protected $table = 'posters';
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'duration',
        'genre_id',
        'country',
    ];
    public function genre(){
        return $this->belongsTo(Genre::class, 'genre_id');
    }
    public function sessions(){
        return $this->hasMany(Session::class, 'poster_id');
    }
}
