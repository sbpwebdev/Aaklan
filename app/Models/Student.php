<?php
//use App\Models\Student;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'Student';

    // Primary key
    protected $primaryKey = 'Student_id';

    // Disable timestamps if using custom fields
    public $timestamps = false;

    // Fields that are mass assignable
    protected $fillable = [
        'student_id',  // Primary key with custom name
        'student_name',
       'student_email',
       'student_contact',
       'student_address',
       
       'organization_code',
      
       'student_images',
        'student_type_id',
        'student_grade_id',
        'student_course_id',
       'created_on',
        'created_by',
       'modified_on',
        'modified_by',
        'is_active',
        'is_delete',
    ];

    // Fields that should be cast to a specific type
    protected $casts = [
        'created_on' => 'datetime',
        'modified_on' => 'datetime',
        'is_active' => 'boolean',
        'is_delete' => 'boolean',
    ];
}
