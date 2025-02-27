<?php
//use App\Models\Staff;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationType extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'OrganizationType';

    // Primary key
    protected $primaryKey = 'OrganizationType_id';

    // Disable timestamps if using custom fields
    public $timestamps = false;

    // Fields that are mass assignable
    protected $fillable = [
        'OrganizationType_id',  // Primary key with custom name
        'OrganizationType_name',
       
        'is_active',
        
    ];

    // Fields that should be cast to a specific type
    protected $casts = [
      
        'is_active' => 'boolean',
        
    ];
}
