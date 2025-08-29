<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

  protected $fillable = [
        'section_name',
         'description',
         'Created_by',
    ];


    protected $hidden = [

    ];


   // protected $casts = [

    //];

    public $timestamps = false;

   // protected $softDelete = false;
}
