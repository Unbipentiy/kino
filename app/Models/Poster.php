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
        'genre',
        'country',
    ];

    public function sessions()
    {
        return $this->hasMany(Session::class, 'poster_id');
    }

    public function files()
    {
        return $this->morphMany('App\File', 'entity_id');
    }
}
