<?php
// app/Models/Calculation.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calculation extends Model
{
    protected $fillable = ['number1', 'number2', 'operation', 'result'];
}
