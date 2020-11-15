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
        'month',
        'date_of_payment',
        'school_fee',
        'entrance_fee',
        'status',
    ];
    protected $hidden = [];
    public static $rules = [
        'create' => [
            'student_id' => 'required|numeric',
            'month' => 'required|string|in:Januari,Februari,Maret,April,Mei,Juni,Juli,Agustus,September,Oktober,November,Desember',
            'date_of_payment' => 'required|date',
            'school_fee' => 'required|numeric',
            'entrance_fee' => 'required|numeric',
            'status' => 'required|string|in:Lunas,Belum Lunas',
        ],
        'update' => [
            'student_id' => 'nullable|numeric',
            'month' => 'nullable|string|in:Januari,Februari,Maret,April,Mei,Juni,Juli,Agustus,September,Oktober,November,Desember',
            'date_of_payment' => 'nullable|date',
            'school_fee' => 'nullable|numeric',
            'entrance_fee' => 'nullable|numeric',
            'status' => 'nullable|string|in:Lunas,Belum Lunas',
        ],
    ];
}
