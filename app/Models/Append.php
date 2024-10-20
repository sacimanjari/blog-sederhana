<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Append extends Model
{
    use HasFactory;
    /**
* fillable
*
* @var array
*/
protected $fillable = [
    'name', 'email', 'subject', 'message'
];
}