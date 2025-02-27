<?php

namespace App\Http\Controllers;

use App\Models\StaffType; // <-- Make sure this line is here
use Illuminate\Http\Request;

use App\Services\StaffTypeService;


class StaffTypeController extends Controller
{
    protected $StaffTypeService;

    public function __construct(StaffTypeService $StaffTypeService)
    {
        $this->StaffTypeService = $StaffTypeService;
    }

    // Create a new StaffType
    public function store(Request $request)
    {

        //dd($request);
        $data = $request->validate([
            'StaffType_name' => 'required|string|max:255',
          
            
        ]);
       // dd($data);
       $StaffType = $this->StaffTypeService->create($data);
      // return response()->json($StaffType, 201);
      //return redirect('StaffTypes');
      return redirect()->route('StaffTypes.index')->with('success', 'StaffType submitted successfully.');
    }

    // Get all StaffTypes
    public function index()
    {
        $StaffTypes = $this->StaffTypeService->getAll();
        //dd($StaffTypes);
        return view('StaffType.list',compact('StaffTypes'));

    }

    public function create()
    {
        return view('StaffType.create'); // Return the create form view
    }

    // Get a single StaffType by ID
    public function show($id)
    {
        $StaffType = $this->StaffTypeService->getById($id);
        return response()->json($StaffType);
    }
    // Show the form to edit an StaffType
    public function edit(int $StaffTypeId)
    {
        //dd($StaffType);
        $StaffType = $this->StaffTypeService->getById($StaffTypeId);
        return view('StaffType.edit',compact('StaffType'));
    }
    // Update an StaffType
    public function update(Request $request, $id)
    {
        //dd($id);
        $data = $request->validate([
            'StaffType_name' => 'required|string|max:255',
            
        ]);
       // dd($data);
        $StaffType = $this->StaffTypeService->update($id, $data);
        //return response()->json($StaffType);
        //return redirect('StaffTypes');
    }

    // Delete an StaffType
    public function destroy($id)
    {
        //dd($id);
        $StaffType = $this->StaffTypeService->delete($id);
    
       return redirect('StaffTypes');
    }
}

