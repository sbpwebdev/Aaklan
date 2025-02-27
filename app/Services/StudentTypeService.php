<?php

namespace App\Services;

use App\Models\Grade;

class GradeService
{
    public function create(array $data)
    {
        return Grade::create($data);
    }

    public function getAll()
    {
        return Grade::all();
    }

    public function getById($id)
    {
        return Grade::findOrFail($id);
    }

    public function update($id, array $data)
    {
        $Grade = Grade::findOrFail($id);
        $Grade->update($data);
        return $Grade;
    }

    public function delete($id)
    {
        
        try {
            $Grade = Grade::findOrFail($id);
            $Grade->delete();  // Soft delete or use forceDelete() for permanent delete
            return redirect()->route('Grade.index')->with('success', 'Grade deleted successfully.');
        } catch (\Exception $e) {
            dd($e->getMessage());
            // Log the exception or return the error message
          //  \Log::error('Failed to delete Grade: ' . $e->getMessage());
           // return redirect()->route('Grades.index')->with('error', 'Failed to delete Grade.');
        }
    }
}
