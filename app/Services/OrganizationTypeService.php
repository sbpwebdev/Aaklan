<?php

namespace App\Services;

use App\Models\OrganizationType;

class OrganizationTypeService
{
    public function create(array $data)
    {
        return OrganizationType::create($data);
    }

    public function getAll()
    {
        return OrganizationType::all();
    }

    public function getById($id)
    {
        return OrganizationType::findOrFail($id);
    }

    public function update($id, array $data)
    {
        $OrganizationType = OrganizationType::findOrFail($id);
        $OrganizationType->update($data);
        return $OrganizationType;
    }

    public function delete($id)
    {
        
        try {
            $OrganizationType = OrganizationType::findOrFail($id);
            $OrganizationType->delete();  // Soft delete or use forceDelete() for permanent delete
            return redirect()->route('OrganizationType.index')->with('success', 'OrganizationType deleted successfully.');
        } catch (\Exception $e) {
            dd($e->getMessage());
            // Log the exception or return the error message
          //  \Log::error('Failed to delete OrganizationType: ' . $e->getMessage());
           // return redirect()->route('OrganizationTypes.index')->with('error', 'Failed to delete OrganizationType.');
        }
    }
}
