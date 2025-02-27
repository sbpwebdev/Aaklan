<?php
//use App\Models\Staff;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'Grade';

    // Primary key
    protected $primaryKey = 'Grade_id';

    // Disable timestamps if using custom fields
    public $timestamps = false;

    // Fields that are mass assignable
    protected $fillable = [
        'Grade_id',  // Primary key with custom name
        'Grade_name',
       
        'is_active',
        
    ];

    // Fields that should be cast to a specific type
    protected $casts = [
      
        'is_active' => 'boolean',
        
    ];
}
