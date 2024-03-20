<?php
namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pomeshcheniya extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'pomeshcheniye_id',
        'name_or_number',
        'room_type',
        'podrazdeleniye_id'
    ];



    protected $table = 'pomeshcheniya';

    protected $primaryKey = 'pomeshcheniye_id';

    

    public function podrazdeleniya()
    {
        return $this->hasMany(Employee::class, 'pomeshcheniye_id', 'podrazdeleniye_id');
    }
}