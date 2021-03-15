<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    use HasFactory;

   // protected $table = null;
    
   protected $primaryKey = "id";
  
   public $timestamps = false;
    //const CREATED_AT =null;
    //const CREATED_AT ="create_time";
    //const UPDATED_AT =null;

}
