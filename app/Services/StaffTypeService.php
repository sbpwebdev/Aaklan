<?php

namespace App\Services;

use App\Models\StaffType;

class StaffTypeService
{
    public function create(array $data)
    {
        return StaffType::create($data);
    }

    public function getAll()
    {
        return StaffType::all();
    }

    public function getById($id)
    {
        return StaffType::findOrFail($id);
    }

    public function update($id, array $data)
    {
        $StaffType = StaffType::findOrFail($id);
        $StaffType->update($data);
        return $StaffType;
    }

    public function delete($id)
    {
        
        try {
            $StaffType = StaffType::findOrFail($id);
            $StaffType->delete();  // Soft delete or use forceDelete() for permanent delete
            return redirect()->route('StaffTypes.index')->with('success', 'StaffType deleted successfully.');
        } catch (\Exception $e) {
            dd($e->getMessage());
            // Log the exception or return the error message
          //  \Log::error('Failed to delete StaffType: ' . $e->getMessage());
           // return redirect()->route('StaffTypes.index')->with('error', 'Failed to delete StaffType.');
        }
    }
}
