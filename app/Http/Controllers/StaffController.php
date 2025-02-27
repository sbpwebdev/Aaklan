<?php

namespace App\Http\Controllers;

use App\Models\Staff; // <-- Make sure this line is here
use Illuminate\Http\Request;

use App\Services\StaffService;


class StaffController extends Controller
{
    protected $StaffService;

    public function __construct(StaffService $StaffService)
    {
        $this->StaffService = $StaffService;
    }

    // Create a new Staff
    public function store(Request $request)
    {

        //dd($request);
        $data = $request->validate([
            'Staff_name' => 'required|string|max:255',
            'Staff_email' => 'required|email|unique:Staff,Staff_email',
            'Staff_contact' => 'string',
            'qualification' => 'string',
            'Staff_organization_id' => 'integer',
            'Staff_type_id' => 'integer',
            'Staff_course_id' => 'integer',
            'Staff_city' => 'string',
            'Staff_skills' => 'string',
            'IsEmployee' => 'boolean',
            
        ]);
       // dd($data);
       $Staff = $this->StaffService->create($data);
      // return response()->json($Staff, 201);
      //return redirect('Staffs');
      return redirect()->route('staffs.index')->with('success', 'Staff submitted successfully.');
    }

    // Get all Staffs
    public function index()
    {
        $Staffs = $this->StaffService->getAll();
        //dd($Staffs);
        return view('Staff.list',compact('Staffs'));

    }

    public function create()
    {
        return view('Staff.create'); // Return the create form view
    }

    // Get a single Staff by ID
    public function show($id)
    {
        $Staff = $this->StaffService->getById($id);
        return response()->json($Staff);
    }
    // Show the form to edit an Staff
    public function edit(int $StaffId)
    {
        //dd($Staff);
        $Staff = $this->StaffService->getById($StaffId);
        return view('Staff.edit',compact('Staff'));
    }
    // Update an Staff
    public function update(Request $request, $id)
    {
        
        $data = $request->validate([
            'Staff_name' => 'required|string|max:255',
            'Staff_email' => 'required|email',
            'Staff_contact' => 'string',
            'qualification' => 'string',
            'Staff_organization_id' => 'integer',
            'Staff_type_id' => 'integer',
            'Staff_course_id' => 'integer',
            'Staff_city' => 'string',
            'Staff_skills' => 'string',
            'IsEmployee' => 'boolean',
        ]);
       // dd($data);
        $Staff = $this->StaffService->update($id, $data);
        //return response()->json($Staff);
        return redirect('staffs');
    }

    // Delete an Staff
    public function destroy($id)
    {
        //dd($id);
        $Staff = $this->StaffService->delete($id);
      // $Staff = Staff::findOrFail($id);
        //dd($Staff);
      //  $Staff->delete();
       // return response()->json(['message' => 'Staff deleted successfully']);
       return redirect('staffs');
    }
}

