<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.admin');
    }

    public function indexStudents()
    {
        $students = Student::all();
        if ($students == NULL) {
            $students = [];
        }
        return view('admin.students', compact('students'));
    }

    public function editprofile()
    {
        return view('admin.editprofile');
    }

    public function ad_calendar()
    {
        return view('admin.ad_calendar');
    }
    
}
