<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;

class PagesController extends Controller
{
    public function home()
    {
        return view('public.index');
    }

    public function admin()
    {
        // $student = DB::table('students')->get();
        $student = Student::paginate(5);
        return view('admin.admin', compact('student'));
    }
}
