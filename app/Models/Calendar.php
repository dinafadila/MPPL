<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;

    protected $table = 'calendars';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $attributes = [];
    protected $fillable = [
        'name_of_event',
        'date_of_start',
        'date_of_end',
        'information',
    ];
    protected $hidden = [];
    public static $rules = [
        'create' => [
            'name_of_event' => 'required|string|min:3|max:30',
            'date_of_start' => 'required|date',
            'date_of_end' => 'required|date',
            'information' => 'required|string',
        ],
        'update' => [
            'name_of_event' => 'nullable|string|min:3|max:30',
            'date_of_start' => 'nullable|date',
            'date_of_end' => 'nullable|date',
            'information' => 'nullable|string',
        ],
    ];
}