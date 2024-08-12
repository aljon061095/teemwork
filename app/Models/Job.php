<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory;
    use SoftDeletes;

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
        'privacy_settings'
    ];
}
