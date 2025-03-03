<?php

namespace App\Services;

use App\Models\Level;

class LevelService
{
    public function create(array $data)
    {
        return Level::create($data);
    }

    public function getAll()
    {
        return Level::all();
    }

    public function getById($id)
    {
        return Level::findOrFail($id);
    }

    public function update($id, array $data)
    {
        $Level = Level::findOrFail($id);
        $Level->update($data);
        return $Level;
    }

    public function delete($id)
    {
        
        try {
            $Level = Level::findOrFail($id);
            $Level->delete();  // Soft delete or use forceDelete() for permanent delete
            return redirect()->route('levels.index')->with('success', 'Level deleted successfully.');
        } catch (\Exception $e) {
            dd($e->getMessage());
            // Log the exception or return the error message
          //  \Log::error('Failed to delete Level: ' . $e->getMessage());
           // return redirect()->route('Levels.index')->with('error', 'Failed to delete Level.');
        }
    }
}
