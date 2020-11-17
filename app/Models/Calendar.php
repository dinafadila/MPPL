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
        'date_of_event',
        'name_of_event',
        'information',
    ];
    protected $hidden = [];
    public static $rules = [
        'create' => [
            'date_of_event' => 'required|date',
            'name_of_event' => 'required|string|min:3|max:30',
            'information' => 'required|string|min:3|max:100',
        ],
        'update' => [
            'date_of_event' => 'nullable|date',
            'name_of_event' => 'nullable|string|min:3|max:30',
            'information' => 'nullable|string|min:3|max:100',
        ],
    ];
}
