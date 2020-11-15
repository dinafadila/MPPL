<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saving extends Model
{
    use HasFactory;

    protected $table = 'savings';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $attributes = [];
    protected $fillable = [
        'student_id',
        'date_of_saving',
        'income',
        'spending',
    ];
    protected $hidden = [];
    public static $rules = [
        'create' => [
            'student_id' => 'required|numeric',
            'date_of_saving' => 'required|date',
            'income' => 'required|numeric',
            'spending' => 'required|numeric',
        ],
        'update' => [
            'student_id' => 'nullable|numeric',
            'date_of_saving' => 'nullable|date',
            'income' => 'nullable|numeric',
            'spending' => 'nullable|numeric',
        ],
    ];
}
