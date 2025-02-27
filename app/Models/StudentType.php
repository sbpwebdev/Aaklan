<?php
//use App\Models\Staff;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentType extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'StudentType';

    // Primary key
    protected $primaryKey = 'StudentType_id';

    // Disable timestamps if using custom fields
    public $timestamps = false;

    // Fields that are mass assignable
    protected $fillable = [
        'StudentType_id',  // Primary key with custom name
        'StudentType_name',
       
        'is_active',
        
    ];

    // Fields that should be cast to a specific type
    protected $casts = [
      
        'is_active' => 'boolean',
        
    ];
}
