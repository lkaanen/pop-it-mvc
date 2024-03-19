<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  pomeshcheniya extends Model 
{
   use HasFactory;

   public $timestamps = false;

   protected $table = ' pomeshcheniya'; // Укажите имя таблицы

   protected $primaryKey = ' pomeshcheniya_id'; // Укажите поле первичного ключа

   protected $fillable = [
       'name_or_number',
       'room_type',
       'podrazdeleniye_id',
   ];

   // Определите отношение между Pomeshcheniya и Podrazdeleniya
   public function department()
   {
       return $this->belongsTo( pomeshcheniya::class, 'podrazdeleniye_id', 'podrazdeleniye_id');
   }

}