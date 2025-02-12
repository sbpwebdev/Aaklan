<?php

// app/Http/Controllers/OrganizationController.php

namespace App\Http\Controllers;

use App\Services\OrganizationService;
use Illuminate\Http\Request;

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
            'address' => 'string',
            'referance_code' => 'string',
            'no_of_trainers' => 'integer',
           // 'organization_images' => 'string',
            'organization_type_id' => 'integer',
            
            
        ]);
       // dd($data);
       $organization = $this->organizationService->create($data);
      // return response()->json($organization, 201);
      return redirect('/admin/organization');
    }

    // Get all organizations
    public function index()
    {
        $organizations = $this->organizationService->getAll();
        return view('admin/Organization/list',compact('organizations'));

       // return response()->json($organizations);
    }

    public function add()
    {
        
        return view('admin/Organization/add');

    }

    // Get a single organization by ID
    public function show($id)
    {
        $organization = $this->organizationService->getById($id);
        return response()->json($organization);
    }

    // Update an organization
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:organizations,email',
            'address' => 'sometimes|required|string',
        ]);

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
