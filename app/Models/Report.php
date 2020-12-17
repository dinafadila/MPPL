<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Report extends Model
{
    use HasFactory;

    protected $table = 'reports';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $attributes = [];
    protected $fillable = [
        'student_id',
        'group',
        'semester',
        'school_year',
        'religion_and_moral',
        'social_emotional_and_autonomy',
        'language',
        'cognitive',
        'physical',
        'art',
        'extracurricular',
        'grade_of_extracurricular',
        'description',
        'sick',
        'permit',
        'absent',
        'note_for_parents',
        'date_of_report',
    ];
    protected $hidden = [];
    public static $rules = [
        'create' => [
            'student_id' => 'required|numeric',
            'group' => 'required|string|min:1|max:3',
            'semester' => 'required|numeric',
            'school_year' => 'required|string',
            'religion_and_moral' => 'required|string',
            'social_emotional_and_autonomy' => 'required|string',
            'language' => 'required|string',
            'cognitive' => 'required|string',
            'physical' => 'required|string',
            'art' => 'required|string',
            'extracurricular' => 'required|string|min:3|max:20',
            'grade_of_extracurricular' => 'required|string|in:A,B,C,K',
            'description' => 'required|string',
            'sick' => 'required|numeric',
            'permit' => 'required|numeric',
            'absent' => 'required|numeric',
            'note_for_parents' => 'required|string',
            'date_of_report' => 'required|date',
        ],
        'update' => [
            'student_id' => 'nullable|numeric',
            'group' => 'nullable|string|min:1|max:3',
            'semester' => 'nullable|numeric',
            'school_year' => 'nullable|string',
            'religion_and_moral' => 'nullable|string',
            'social_emotional_and_autonomy' => 'nullable|string',
            'language' => 'nullable|string',
            'cognitive' => 'nullable|string',
            'physical' => 'nullable|string',
            'art' => 'nullable|string',
            'extracurricular' => 'nullable|string|min:3|max:20',
            'grade_of_extracurricular' => 'nullable|string|in:A,B,C,K',
            'description' => 'nullable|string',
            'sick' => 'nullable|numeric',
            'permit' => 'nullable|numeric',
            'absent' => 'nullable|numeric',
            'note_for_parents' => 'nullable|string',
            'date_of_report' => 'nullable|date',
        ],
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
