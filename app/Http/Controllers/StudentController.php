<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{

    public function welcome() {
        return view('welcome')->with('title', 'Laravel CRUD Demo');
    }

    public function index() {}

    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        Student::create(request(['name', 'email', 'password']));
        return redirect('/student/showall');
    }

    public function show($id)
    {
        $students = Student::find($id);
        dd($students);
    }

    public function showall() {
        $students = Student::all();
        // dd($students);
        return view('pages.showall', compact('students'));
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('pages.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        Student::find($id)->update($request->all());
        // dd($student);
        // $student->name = $request->name;
        // $student->email = $request->email;
        // $student->password = $request->password;
        // $student->save();
        return redirect('/student/showall');
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return redirect()->action('StudentController@showall');
    }
}
