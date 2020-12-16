<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
use App\Models\Report;
use App\Models\Fee;
use App\Models\Calendar;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }

    public function indexStudent() {
        $student = Student::where('user_id', auth()->user()->id)->first();
        return view('pages.biodata', compact('student'));
    }

    public function indexReport() {
        $student = Student::where('user_id', auth()->user()->id)->first();
        $report = Report::where('student_id', $student->id)->first();
        return view('pages.report', compact('report'));
    }
    
    public function indexFee() {
        $student = Student::where('user_id', auth()->user()->id)->first();
        $fee = Fee::where('student_id', $student->id)->first();
        return view('pages.fee', compact('fee'));
    }

    public function indexCalendar() {
        $calendars = Calendar::all();
        if ($calendars == NULL) {
            $calendars = [];
        }
        return view('pages.calendar', compact('calendars'));
    }
}
