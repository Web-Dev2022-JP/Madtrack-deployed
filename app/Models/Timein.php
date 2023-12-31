<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timein extends Model
{
    use HasFactory;

    public $fillable = ['employee_id', 'timein', 'status', 'day', 'month', 'year'];
}
