<?php

// app/Http/Controllers/OrganizationController.php

namespace App\Http\Controllers;

use App\Models\Organization; // <-- Make sure this line is here
use Illuminate\Http\Request;

use App\Services\OrganizationService;

class OrganizationController extends Controller
{
    protected $organizationService;

    public function __construct(OrganizationService $organizationService)
    {
        $this->organizationService = $organizationService;
    }

    // Create a new organization
    public function store(Request $request)
    {
        

        //dd($request);
        $data = $request->validate([
            'organization_name' => 'required|string|max:255',
            'organization_email' => 'required|email|unique:organization,organization_email',
            'organization_contact' => 'string',
            'organization_city' => 'string',
            'organization_state' => 'string',
            'organization_address' => 'string',
            'organization_code' => 'string',
            'is_other_organization' => 'boolean',
            'other_organization_code' => 'string',
            'address' => 'string',
            'referance_code' => 'string',
            'no_of_trainers' => 'integer',
           // 'organization_images' => $fileName,
            'organization_type_id' => 'integer',
            
            
        ]);

        $path = "";
        $fileName = "";
        if ($request->hasFile('organization_images')) {
            // Get the file
            $file = $request->file('organization_images');

            // Generate a unique file name (optional)
            $fileName = time() . '.' . $file->getClientOriginalExtension();

            // Store the image in the 'public/images' folder
            $path = $file->storeAs('public/organizations', $fileName);

            // Return a success message with the path
           // return back()->with('success', 'Image uploaded successfully!')->with('path', 'images/' . $fileName);
        }
        $organization = Organization::create([
            'organization_name' => $request->organization_name,
            'organization_email' => $request->organization_email,
            'organization_contact' => $request->organization_contact,
            'organization_city' => $request->organization_city,
            'organization_state' => $request->organization_state,
            'organization_address' => $request->organization_address,
            'organization_code' => $request->organization_code,
            'is_other_organization' => $request->is_other_organization,
            'other_organization_code' => $request->other_organization_code,
            'address' => $request->address,
            'referance_code' => $request->referance_code,
            'no_of_trainers' => $request->no_of_trainers,
            'organization_images' => $fileName,
            'organization_type_id' => $request->organization_type_id,
        ]);


      // dd($data);
       //$organization = $this->organizationService->create($data);
      // return response()->json($organization, 201);
      return redirect()->route('organizations.index')->with('success', 'Organization submitted successfully.');
    }

    // Get all organizations
    public function index()
    {
        $organizations = $this->organizationService->getAll();
        return view('Organization.list',compact('organizations'));

    }

    public function create()
    {
        return view('Organization.create'); // Return the create form view
    }

    // Get a single organization by ID
    public function show($id)
    {
        $organization = $this->organizationService->getById($id);
        return view('Organization.details',compact('organization'));
    }
    // Show the form to edit an organization
    public function edit(int $organizationId)
    {
        //dd($organizationId);
         // Update an organization
        $organization = $this->organizationService->getById($organizationId);
        return view('Organization.edit',compact('organization'));
    }
   
        
    public function update(Request $request, $id)
    {
       // dd($id);
        $data = $request->validate([
            'organization_name' => 'required|string|max:255',
            'organization_email' => 'required|email',
            'organization_contact' => 'string',
            'organization_city' => 'string',
            'organization_state' => 'string',
            'organization_address' => 'string',
            'organization_code' => 'string',
            'is_other_organization' => 'boolean',
            'other_organization_code' => 'string',
            'address' => 'string',
            'referance_code' => 'string',
            'no_of_trainers' => 'integer',
           // 'organization_images' => 'string|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'organization_type_id' => 'integer',
        ]);
        //dd($data);

       

        $organization = $this->organizationService->update($id, $data);
        //return response()->json($organization);
        return redirect('organizations');
    }

    // Delete an organization
    public function destroy($id)
    {
        $organization = $this->organizationService->delete($id);
       // return response()->json(['message' => 'Organization deleted successfully']);
       return redirect('organizations');
    }
}
