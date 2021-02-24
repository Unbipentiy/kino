<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $table = 'sessions';
    protected $fillable = [
        'poster_id',
        'date',
        'hall',
        'places',
    ];
    public $timestamps = false;
    public function poster(){
        return $this->belongsTo(Poster::class, 'poster_id');
    }
}
