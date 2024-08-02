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
        'department',
        'hiring_manager',
        'location',
        'employment_type',
        'head_count',
        'salary_range',
        'posting_date',
        'application_deadline',
        'workplace_type',
        'job_pipeline_stages',
        'privacy_settings',
        'screening_questions',
        'custom_fields'
    ];
}
