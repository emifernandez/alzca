<?php

namespace alzca;

use Illuminate\Database\Eloquent\Model;

class Beloved extends Model
{
    const LEVE = 'leve';
    const MODERADO = 'moderado';
    const GRAVE = 'grave';
    protected $fillable = ['name', 'lastname', 'birth', 'contact', 'avatar'];
}
