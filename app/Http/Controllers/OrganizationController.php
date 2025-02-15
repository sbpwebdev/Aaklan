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
           // 'organization_images' => 'string',
            'organization_type_id' => 'integer',
            
            
        ]);
       // dd($data);
       $organization = $this->organizationService->create($data);
      // return response()->json($organization, 201);
      return redirect('organization');
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
        return response()->json($organization);
    }
    // Show the form to edit an organization
    public function edit(Organization $organization)
    {
        //dd($organization);
        return view('Organization.edit',compact('organization'));
    }
    // Update an organization
    public function update(Request $request, $id)
    {
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
           // 'organization_images' => 'string',
            'organization_type_id' => 'integer',
        ]);
       // dd($data);
        $organization = $this->organizationService->update($id, $data);
        return response()->json($organization);
    }

    // Delete an organization
    public function destroy($id)
    {
        $organization = $this->organizationService->delete($id);
        return response()->json(['message' => 'Organization deleted successfully']);
    }
}
