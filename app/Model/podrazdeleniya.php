<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class podrazdeleniya extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'podrazdeleniya';

    protected $primaryKey = 'podrazdeleniye_id';

    protected $fillable = [
        'name',
        'department_type',
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class, 'department_id', 'podrazdeleniye_id');
    }
}