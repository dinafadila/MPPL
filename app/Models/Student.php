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
        'user_id',
        'name',
        'gender',
        'place_of_birth',
        'date_of_birth',
        'religion',
        'date_of_entry',
        'address',
        'phone',
        'father_name',
        'mother_name',
    ];
    protected $hidden = [];
    public static $rules = [
        'create' => [
            'user_id' => 'required|numeric',
            'name' => 'required|string|min:3|max:50',
            'gender' => 'required|string|in:Laki-laki,Perempuan',
            'place_of_birth' => 'required|string|min:3|max:20',
            'date_of_birth' => 'required|date',
            'religion' => 'required|string|min:3|max:20',
            'date_of_entry' => 'required|date',
            'address' => 'required|string|min:3|max:1000',
            'phone' => 'required|numeric',
            'father_name' => 'required|string|min:3|max:50',
            'mother_name' => 'required|string|min:3|max:50',
        ],
        'update' => [
            'user_id' => 'nullable|numeric',
            'name' => 'nullable|string|min:3|max:50',
            'gender' => 'nullable|string|in:Laki-laki,Perempuan',
            'place_of_birth' => 'nullable|string|min:3|max:20',
            'date_of_birth' => 'nullable|date',
            'religion' => 'nullable|string|min:3|max:20',
            'date_of_entry' => 'nullable|date',
            'address' => 'nullable|string|min:3|max:1000',
            'phone' => 'nullable|numeric',
            'father_name' => 'nullable|string|min:3|max:50',
            'mother_name' => 'nullable|string|min:3|max:50',
        ],
    ];
}
