<?php

namespace App\Services;

use App\Models\Student;

class StudentService
{
    public function create(array $data)
    {
        return Student::create($data);
    }

    public function getAll()
    {
        return Student::all();
    }

    public function getById($id)
    {
        return Student::findOrFail($id);
    }

    public function update($id, array $data)
    {
        $Student = Student::findOrFail($id);
        $Student->update($data);
        return $Student;
    }

    public function delete($id)
    {
        
        try {
            $student = Student::findOrFail($id);
            $student->delete();  // Soft delete or use forceDelete() for permanent delete
            return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
        } catch (\Exception $e) {
            dd($e->getMessage());
            // Log the exception or return the error message
          //  \Log::error('Failed to delete student: ' . $e->getMessage());
           // return redirect()->route('students.index')->with('error', 'Failed to delete student.');
        }
    }
}
