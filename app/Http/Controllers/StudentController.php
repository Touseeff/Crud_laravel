<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Post;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = new Post;
        $data = Post::all();
        // $data = compact('post');
        return view('dashboard',['data'=>$data]);
    //   return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("student_register");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required',
            "email" => 'required',
            "password" => 'required'
        ]);

        $student = new Student;
        $student->name = $req['name'];
        $student->email = $req['email'];
        $student->password = $req['password'];
        // $student->password = Hash::make($req['password']); 
        if ($student->save()) {
            return redirect('login');
            // session()->put('user', $student->id);//
        }


        // return redirect('');
    }
    public function login(Request $req)
    {
        return view('login');
    }
    public function loginProcess(Request $req)
    {
        $req->validate([
            "email" => 'required|email|exists:students,email',
            "password" => 'required|min:5'
        ]);
        $user = Student::where('email', $req->email)->first();
        if (\Hash::check($req->password, $user->password)) {
            session()->put('user', $user->id);
            // return "dashbord";
            return redirect()->route('dashboard.index');
        } else {
            return "did not match";
            // rturn pasword did not match
        }
            // return redirect('');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}