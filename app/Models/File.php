<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $table = 'genries';
    protected $fillable = [
        'name',
        'extension',
        'entity_type',
        'entity_id',
    ];
    public $timestamps = false;

    public function fileable()
    {
        return $this->morphTo();
    }

}
