<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $table = 'trainings';
    protected $fillable = [
        'title',
        'start_date',
        'end_date',
        'venue',
        'objective',
        'message',
        'image',
    ];
}
