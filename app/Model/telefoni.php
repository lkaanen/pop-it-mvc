<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telefoni extends Model
{
    use HasFactory;

    protected $table = 'telefoni';
    protected $primaryKey = 'telefon_id';
    public $timestamps = false;

    protected $fillable = [
        'telefon_id',
        'phone_number'
    ];

    // Определение отношения "многие-к-одному" с самим собой (self-referencing)
    public function telefon()
    {
        return $this->belongsTo(telefoni::class, 'parent_id', 'telefon_id');
    }
}