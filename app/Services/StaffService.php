<?php

namespace App\Services;

use App\Models\Staff;

class StaffService
{
    public function create(array $data)
    {
        return Staff::create($data);
    }

    public function getAll()
    {
        return Staff::all();
    }

    public function getById($id)
    {
        return Staff::findOrFail($id);
    }

    public function update($id, array $data)
    {
        $Staff = Staff::findOrFail($id);
        $Staff->update($data);
        return $Staff;
    }

    public function delete($id)
    {
        
        try {
            $Staff = Staff::findOrFail($id);
            $Staff->delete();  // Soft delete or use forceDelete() for permanent delete
            return redirect()->route('staffs.index')->with('success', 'Staff deleted successfully.');
        } catch (\Exception $e) {
            dd($e->getMessage());
            // Log the exception or return the error message
          //  \Log::error('Failed to delete Staff: ' . $e->getMessage());
           // return redirect()->route('Staffs.index')->with('error', 'Failed to delete Staff.');
        }
    }
}
