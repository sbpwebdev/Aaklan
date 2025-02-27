<?php

namespace App\Http\Controllers;

use App\Models\StudentType; // <-- Make sure this line is here
use Illuminate\Http\Request;

use App\Services\StudentTypeService;


class StudentTypeController extends Controller
{
    protected $StudentTypeService;

    public function __construct(StudentTypeService $StudentTypeService)
    {
        $this->StudentTypeService = $StudentTypeService;
    }

    // Create a new StudentType
    public function store(Request $request)
    {

        //dd($request);
        $data = $request->validate([
            'StudentType_name' => 'required|string|max:255',
          
            
        ]);
       // dd($data);
       $StudentType = $this->StudentTypeService->create($data);
      // return response()->json($StudentType, 201);
      //return redirect('StudentTypes');
      return redirect()->route('StudentTypes.index')->with('success', 'StudentType submitted successfully.');
    }

    // Get all StudentTypes
    public function index()
    {
        $StudentTypes = $this->StudentTypeService->getAll();
        //dd($StudentTypes);
        return view('StudentType.list',compact('StudentTypes'));

    }

    public function create()
    {
        return view('StudentType.create'); // Return the create form view
    }

    // Get a single StudentType by ID
    public function show($id)
    {
        $StudentType = $this->StudentTypeService->getById($id);
        return response()->json($StudentType);
    }
    // Show the form to edit an StudentType
    public function edit(int $StudentTypeId)
    {
        //dd($StudentType);
        $StudentType = $this->StudentTypeService->getById($StudentTypeId);
        return view('StudentType.edit',compact('StudentType'));
    }
    // Update an StudentType
    public function update(Request $request, $id)
    {
        //dd($id);
        $data = $request->validate([
            'StudentType_name' => 'required|string|max:255',
            
        ]);
       // dd($data);
        $StudentType = $this->StudentTypeService->update($id, $data);
        //return response()->json($StudentType);
        //return redirect('StudentTypes');
    }

    // Delete an StudentType
    public function destroy($id)
    {
        //dd($id);
        $StudentType = $this->StudentTypeService->delete($id);
    
       return redirect('StudentTypes');
    }
}

