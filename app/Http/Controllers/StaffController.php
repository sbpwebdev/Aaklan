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
        $path = "";
        $fileName = "";
        if ($request->hasFile('Staff_images')) {
            // Get the file
            $file = $request->file('Staff_images');

            // Generate a unique file name (optional)
            $fileName = time() . '.' . $file->getClientOriginalExtension();

            // Store the image in the 'public/images' folder
            $path = $file->storeAs('public/staff', $fileName);

            
        }
        //dd($fileName);
        $staff = Staff::create([
            'Staff_name' => $request->Staff_name,
            'Staff_email' => $request->Staff_email,
            'Staff_contact' => $request->Staff_contact,
            'qualification' => $request->qualification,
            'Staff_organization_id' => $request->Staff_organization_id,
            'Staff_type_id' => $request->Staff_type_id,
            'Staff_course_id' => $request->Staff_course_id,
            'Staff_city' => $request->Staff_city,
            'Staff_skills' => $request->Staff_skills,
            'Staff_images' => $fileName,
            'IsEmployee' => 1,
           
        ]);

      return redirect()->route('staffs.index')->with('success', 'Staff submitted successfully.');
    }

    // Get all Staffs
    public function index()
    {
        $Staffs = $this->StaffService->getAll();
        //dd($Staffs);
        return view('Staff.list',compact('Staffs'));

    }

     // Get all Staffs
     public function gridlist()
     {
         $Staffs = $this->StaffService->getAll();
         //dd($Staffs);
         return view('Staff.gridlist',compact('Staffs'));
 
     }

    public function create()
    {
        return view('Staff.create'); // Return the create form view
    }

    // Get a single Staff by ID
    public function show($id)
    {
        $Staff = $this->StaffService->getById($id);
        return view('Staff.details',compact('Staff'));
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

