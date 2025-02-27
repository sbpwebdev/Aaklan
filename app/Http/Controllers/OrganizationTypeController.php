<?php

namespace App\Http\Controllers;

use App\Models\OrganizationType; // <-- Make sure this line is here
use Illuminate\Http\Request;

use App\Services\OrganizationTypeService;


class OrganizationTypeController extends Controller
{
    protected $OrganizationTypeService;

    public function __construct(OrganizationTypeService $OrganizationTypeService)
    {
        $this->OrganizationTypeService = $OrganizationTypeService;
    }

    // Create a new OrganizationType
    public function store(Request $request)
    {

        //dd($request);
        $data = $request->validate([
            'OrganizationType_name' => 'required|string|max:255',
          
            
        ]);
       // dd($data);
       $OrganizationType = $this->OrganizationTypeService->create($data);
      // return response()->json($OrganizationType, 201);
      //return redirect('OrganizationTypes');
      return redirect()->route('OrganizationTypes.index')->with('success', 'OrganizationType submitted successfully.');
    }

    // Get all OrganizationTypes
    public function index()
    {
        $OrganizationTypes = $this->OrganizationTypeService->getAll();
        //dd($OrganizationTypes);
        return view('OrganizationType.list',compact('OrganizationTypes'));

    }

    public function create()
    {
        return view('OrganizationType.create'); // Return the create form view
    }

    // Get a single OrganizationType by ID
    public function show($id)
    {
        $OrganizationType = $this->OrganizationTypeService->getById($id);
        return response()->json($OrganizationType);
    }
    // Show the form to edit an OrganizationType
    public function edit(int $OrganizationTypeId)
    {
        //dd($OrganizationType);
        $OrganizationType = $this->OrganizationTypeService->getById($OrganizationTypeId);
        return view('OrganizationType.edit',compact('OrganizationType'));
    }
    // Update an OrganizationType
    public function update(Request $request, $id)
    {
        //dd($id);
        $data = $request->validate([
            'OrganizationType_name' => 'required|string|max:255',
            
        ]);
       // dd($data);
        $OrganizationType = $this->OrganizationTypeService->update($id, $data);
        //return response()->json($OrganizationType);
        return redirect('OrganizationTypes');
    }

    // Delete an OrganizationType
    public function destroy($id)
    {
        //dd($id);
        $OrganizationType = $this->OrganizationTypeService->delete($id);
    
       return redirect('OrganizationTypes');
    }
}

