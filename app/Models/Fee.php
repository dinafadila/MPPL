<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;

    protected $table = 'fees';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $attributes = [];
    protected $fillable = [
        'student_id',
        'july',
        'august',
        'september',
        'october',
        'november',
        'december',
        'january',
        'february',
        'march',
        'april',
        'may',
        'june',
    ];
    protected $hidden = [];
    public static $rules = [
        'create' => [
            'student_id' => 'required|numeric',
            'july' => 'required|numeric',
            'august' => 'required|numeric',
            'september' => 'required|numeric',
            'october' => 'required|numeric',
            'november' => 'required|numeric',
            'december' => 'required|numeric',
            'january' => 'required|numeric',
            'february' => 'required|numeric',
            'march' => 'required|numeric',
            'april' => 'required|numeric',
            'may' => 'required|numeric',
            'june' => 'required|numeric',
        ],
        'update' => [
            'student_id' => 'nullable|numeric',
            'july' => 'nullable|numeric',
            'august' => 'nullable|numeric',
            'september' => 'nullable|numeric',
            'october' => 'nullable|numeric',
            'november' => 'nullable|numeric',
            'december' => 'nullable|numeric',
            'january' => 'nullable|numeric',
            'february' => 'nullable|numeric',
            'march' => 'nullable|numeric',
            'april' => 'nullable|numeric',
            'may' => 'nullable|numeric',
            'june' => 'nullable|numeric',
        ],
    ];
}