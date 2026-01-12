<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company_name',
        'contact_person',
        'email',
        'phone',
        'job_title',
        'skills',
        'experience_required',
        'employment_type',
        'location',
        'budget',
        'timeline',
        'message',
        'status',
    ];
}
