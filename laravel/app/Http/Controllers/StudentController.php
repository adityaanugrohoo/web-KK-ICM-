<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $student = Student::paginate(5);
        return view('admin.index', compact('student'));
    }

    public function showall()
    {
        $student = Student::paginate(5);
        return view('admin/showall', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'keterangan' => 'required'
        ]);
        $student = new Student;
        if ($request->hasFile('pdf')) {
            $request->file('pdf')->move('pdf/', $request->file('pdf')->getClientOriginalName());
            $student->pdf = $request->file('pdf')->getClientOriginalName();
        }
        $student->nama = $request->input('nama');
        $student->nim = $request->input('nim');
        $student->keterangan = $request->input('keterangan');
        $student->user_id = auth()->user()->id;
        $student->save();

        //Student::create($request->all());
        return redirect('/admin')->with('status', 'Data Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('admin/show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $std)
    {
        return view('admin.edit', compact('std'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $std)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'keterangan' => 'required'
        ]);

        Student::where('id', $std->id)
            ->update([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'keterangan' => $request->keterangan
            ]);

        return redirect('/admin')->with('status', 'Data Mahasiswa Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $std)
    {
        Student::destroy($std->id);
        return redirect('/admin')->with('status', 'Data Mahasiswa dihapus');
    }
}
