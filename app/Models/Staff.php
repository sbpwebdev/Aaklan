<?php
//use App\Models\Staff;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'Staff';

    // Primary key
    protected $primaryKey = 'Staff_id';

    // Disable timestamps if using custom fields
    public $timestamps = false;

    // Fields that are mass assignable
    protected $fillable = [
        'Staff_id',  // Primary key with custom name
        'Staff_name',
        'Staff_email',
        'Staff_contact',
        'qualification',
        'Staff_organization',
        'Staff_type_id',
        'Staff_course_id',
        'Staff_city',
        'Staff_skills',
        'IsEmployee',
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
