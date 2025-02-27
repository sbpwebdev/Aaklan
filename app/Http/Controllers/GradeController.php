<?php

namespace App\Http\Controllers;

use App\Models\Grade; // <-- Make sure this line is here
use Illuminate\Http\Request;

use App\Services\GradeService;


class GradeController extends Controller
{
    protected $GradeService;

    public function __construct(GradeService $GradeService)
    {
        $this->GradeService = $GradeService;
    }

    // Create a new Grade
    public function store(Request $request)
    {

        //dd($request);
        $data = $request->validate([
            'Grade_name' => 'required|string|max:255',
          
            
        ]);
       // dd($data);
       $Grade = $this->GradeService->create($data);
      // return response()->json($Grade, 201);
      //return redirect('Grades');
      return redirect()->route('grades.index')->with('success', 'Grade submitted successfully.');
    }

    // Get all Grades
    public function index()
    {
        $Grades = $this->GradeService->getAll();
        //dd($Grades);
        return view('Grade.list',compact('Grades'));

    }

    public function create()
    {
        return view('Grade.create'); // Return the create form view
    }

    // Get a single Grade by ID
    public function show($id)
    {
        $Grade = $this->GradeService->getById($id);
        return response()->json($Grade);
    }
    // Show the form to edit an Grade
    public function edit(int $GradeId)
    {
        //dd($Grade);
        $Grade = $this->GradeService->getById($GradeId);
        return view('Grade.edit',compact('Grade'));
    }
    // Update an Grade
    public function update(Request $request, $id)
    {
        //dd($id);
        $data = $request->validate([
            'grade_name' => 'required|string|max:255',
            
        ]);
       // dd($data);
        $Grade = $this->GradeService->update($id, $data);
        //return response()->json($Grade);
        //return redirect('grades');
    }

    // Delete an Grade
    public function destroy($id)
    {
        //dd($id);
        $Grade = $this->GradeService->delete($id);
    
       return redirect('grades');
    }
}

