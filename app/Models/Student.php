<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $attributes = [];
    protected $fillable = [
        'name',
        'gender',
        'date_of_birth',
        'religion',
        'address',
        'phone',
        'father_name',
        'mother_name',
    ];
    protected $hidden = [];
    public static $rules = [
        'create' => [
            'name' => 'required|string|min:3|max:50',
            'gender' => 'required|string|min:3|max:10',
            'date_of_birth' => 'required|date',
            'religion' => 'required|string|min:3|max:20',
            'address' => 'required|string|min:3|max:1000',
            'phone' => 'required|numeric',
            'father_name' => 'required|string|min:3|max:50',
            'mother_name' => 'required|string|min:3|max:50',
        ],
        'update' => [
            'name' => 'nullable|string|min:3|max:50',
            'gender' => 'nullable|in:male,female',
            'date_of_birth' => 'nullable|date',
            'religion' => 'nullable|string|min:3|max:20',
            'address' => 'nullable|string|min:3|max:1000',
            'phone' => 'nullable|numeric|min:10|max:15',
            'father_name' => 'nullable|string|min:3|max:50',
            'mother_name' => 'nullable|string|min:3|max:50',
        ],
    ];
}
