<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'company',
        'description',
        'pre_questionnaires',
        'department',
        'hiring_manager',
        'location',
        'employment_type',
        'head_count',
        'salary_range',
        'posting_date',
        'salary_range',
        'application_deadline',
        'job_pipeline_stages',
        'user_roles'
    ];
}
