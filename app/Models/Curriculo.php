<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{
    protected $table='curriculo';
    protected $fillable=['name','telefone','email','enderecoweb','experiencias'];
}
