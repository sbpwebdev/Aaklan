<?php

// app/Http/Controllers/StudentController.php

namespace App\Http\Controllers;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Student; 
use App\Models\Grade;
use App\Models\StudentType;
use Illuminate\Http\Request;

use App\Services\StudentService;


class StudentController extends Controller
{
    protected $StudentService;

    public function __construct(StudentService $StudentService)
    {
        $this->StudentService = $StudentService;
       
    }

    // Create a new Student
    public function store(Request $request)
    {

        //dd($request);
        $data = $request->validate([
            'student_name' => 'required|string|max:255',
            'student_email' => 'required|email|unique:Student,Student_email',
            'student_contact' => 'string',
            'student_address' => 'string',
            'organization_code' => 'string',
            'student_course_id' => 'integer',
            'student_grade_id' => 'integer',
            'student_type_id' => 'integer',
                        
        ]);
         $path = "";
       $fileName = "";
       if ($request->hasFile('organization_images')) {
           // Get the file
           $file = $request->file('organization_images');

           // Generate a unique file name (optional)
           $fileName = time() . '.' . $file->getClientOriginalExtension();

           // Store the image in the 'public/images' folder
           $path = $file->storeAs('public/students', $fileName);

           // Return a success message with the path
          // return back()->with('success', 'Image uploaded successfully!')->with('path', 'images/' . $fileName);
       }
      // dd($request->student_email);
      
       $student = Student::create([
          
           'student_name' => $request->student_name,
            'student_email' => $request->student_email,
            'student_contact' => $request->student_contact,
            'student_address' => $request->student_address,
            'organization_code' => $request->organization_code,
            'student_course_id' => $request->student_course_id,
            'student_grade_id' => $request->student_grade_id,
            'student_type_id' => $request->student_type_id,
            'student_images' => $fileName,
       ]);

        // Send the registration email
        Mail::to($request->student_email)->send(new SendEmail($request));

      return redirect()->route('students.index')->with('success', 'Student submitted successfully.');
    }

    // Get all Students
    public function index()
    {
        $students = $this->StudentService->getAll();
        //dd($students);
        return view('Student.list',compact('students'));

    }

    public function create()
    {
        $Grades = Grade::all();
        $StudentTypes = StudentType::all();
        return view('Student.create', compact('Grades', 'StudentTypes'));
    }

    // Get a single Student by ID
    public function show($id)
    {
        $student = $this->StudentService->getById($id);
        return response()->json($student);
    }
    // Show the form to edit an Student
    public function edit(int $studentId)
    {
       
        $Student = $this->StudentService->getById($studentId);
         //dd($Student);
        return view('Student.edit',compact('Student'));
    }
    // Update an Student
    public function update(Request $request, $id)
    {
        
        $data = $request->validate([
            'student_name' => 'required|string|max:255',
            'student_email' => 'required|email',
            'student_contact' => 'string',
            'student_address' => 'string',
            'organization_code' => 'string',
            'student_course_id' => 'integer',
            'student_grade_id' => 'integer',
            'student_type_id' => 'integer',
        ]);
       // dd($data);
        $student = $this->StudentService->update($id, $data);
        //return response()->json($Student);
        return redirect('students');
    }

    // Delete an Student
    public function destroy($id)
    {
        //dd($id);
        $student = $this->StudentService->delete($id);
      // $Student = Student::findOrFail($id);
        //dd($Student);
      //  $Student->delete();
       // return response()->json(['message' => 'Student deleted successfully']);
       //return redirect('students');
    }
}
