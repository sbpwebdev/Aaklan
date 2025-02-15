<?php
//use App\Models\Organization;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'organization';

    // Primary key
    protected $primaryKey = 'organization_id';

    // Disable timestamps if using custom fields
    public $timestamps = false;

    // Fields that are mass assignable
    protected $fillable = [
        'organization_name',
        'organization_email',
        'organization_contact',
        'organization_address',
        'organization_city',
        'organization_state',
        'referance_code',
        'no_of_trainers',
        'password',
        'organization_images',
        'organization_type_id',
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
