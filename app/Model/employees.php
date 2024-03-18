<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Src\Auth\IdentityInterface;

class employees extends Model 
{
   use HasFactory;

   protected $table = 'employees'; // Specify the table name

   protected $primaryKey = 'id'; // Specify the primary key field name

   protected $fillable = [
       'фамилия',
       'имя',
       'отчество',
       'пол',
       'дата_рождения',
       'адрес_прописки',
       'должность',
       'id_кафедры',
   ];

   // Define the relationship between User and Кафедры
   public function department()
   {
       return $this->belongsTo(Department::class, 'id_кафедры', 'id');
   }

}
