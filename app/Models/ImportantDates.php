<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImportantDates extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'description',
        'event_date',
        'event_type',
        'category',
        'days_left',
    ];
}
