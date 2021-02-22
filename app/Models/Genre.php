<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $table = 'genries';
    protected $fillable = [
        'name',
    ];
    public $timestamps = false;
    public function posters(){
        return $this->hasMany(Poster::class, 'genre_id');
    }
}
