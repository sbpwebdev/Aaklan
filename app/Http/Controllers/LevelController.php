<?php

namespace App\Http\Controllers;

use App\Models\Level; // <-- Make sure this line is here
use Illuminate\Http\Request;

use App\Services\LevelService;


class LevelController extends Controller
{
    protected $LevelService;

    public function __construct(LevelService $LevelService)
    {
        $this->LevelService = $LevelService;
    }

    // Create a new Level
    public function store(Request $request)
    {

        //dd($request);
        $data = $request->validate([
            'Level_name' => 'required|string|max:255',
          
            
        ]);
       // dd($data);
       $Level = $this->LevelService->create($data);
      // return response()->json($Level, 201);
      //return redirect('Levels');
      return redirect()->route('Levels.index')->with('success', 'Level submitted successfully.');
    }

    // Get all Levels
    public function index()
    {
        $Levels = $this->LevelService->getAll();
        //dd($Levels);
        return view('Level.list',compact('Levels'));

    }

    public function create()
    {
        return view('Level.create'); // Return the create form view
    }

    // Get a single Level by ID
    public function show($id)
    {
        $Level = $this->LevelService->getById($id);
        return response()->json($Level);
    }
    // Show the form to edit an Level
    public function edit(int $LevelId)
    {
        //dd($Level);
        $Level = $this->LevelService->getById($LevelId);
        return view('Level.edit',compact('Level'));
    }
    // Update an Level
    public function update(Request $request, $id)
    {
        //dd($id);
        $data = $request->validate([
            'Level_name' => 'required|string|max:255',
            
        ]);
       // dd($data);
        $Level = $this->LevelService->update($id, $data);
        //return response()->json($Level);
        //return redirect('Levels');
    }

    // Delete an Level
    public function destroy($id)
    {
        //dd($id);
        $Level = $this->LevelService->delete($id);
    
       return redirect('Levels');
    }
}

