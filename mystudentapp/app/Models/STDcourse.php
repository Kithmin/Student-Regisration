<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class STDcourse extends Model
{
    use HasFactory;
    protected $table = 'stdcourse';

    protected $fillable=[
        'STDName',
        'STDEmail',
    ];

    
}
