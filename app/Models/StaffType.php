<?php
//use App\Models\Staff;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffType extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'StaffType';

    // Primary key
    protected $primaryKey = 'StaffType_id';

    // Disable timestamps if using custom fields
    public $timestamps = false;

    // Fields that are mass assignable
    protected $fillable = [
        'StaffType_id',  // Primary key with custom name
        'StaffType_name',
       
        'is_active',
        
    ];

    // Fields that should be cast to a specific type
    protected $casts = [
      
        'is_active' => 'boolean',
        
    ];
}
