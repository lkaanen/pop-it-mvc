<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class abonents extends Model
{
   use HasFactory;

   public $timestamps = false;
   protected $fillable = [
       'abonent_id',
       'last_name',
       'first_name',
       'patronymic',
       'birth_date',
       'podrazdeleniye_id'
   ];

   protected static function booted()
   {
       // Добавление абонента с хэшированием пароля
       static::creating(function ($abonents) {
           // Здесь можно добавить логику хэширования пароля перед добавлением
       });
   }

   // Поиск абонента по ID
   public function findAbonents(int $id)
   {
       return self::where('abonents_id', $id)->first();
   }

   // Дополнительные методы для работы с таблицей Abonents
}
