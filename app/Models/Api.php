<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    use HasFactory;

    protected $table = 'adel_api';

    protected $fillable = ['nik', 'fullname', 'subdivisi', 'date_visit', 'location', 'description', 'target', 'stk_numbers'];
}
