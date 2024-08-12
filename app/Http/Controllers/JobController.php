<?php

namespace App\Http\Controllers;

use App\Models\EmploymentType;
use App\Models\HiringManager;
use App\Models\Job;
use App\Models\Department;
use App\Models\JobPipelineStage;
use App\Models\Location;
use App\Models\PrivacySetting;
use App\Models\WorkplaceType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Yajra\DataTables\DataTables;

class JobController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Job::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
        return view('jobs.jobs');
    }

    public function create() 
    {
        return view('jobs.job-add');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'title' => 'required',
            'company' => 'required',
            'description' => 'required',
            'location' => 'required'
        ]);

        $job = Job::create([
            'title' => $request->title,
            'company' => $request->company,
            'description' => $request->description,
            'department' => $request->department,
            'hiring_manager' => $request->hiring_manager,
            'location' => $request->location,
            'employment_type' => $request->employment_type,
            'head_count' => $request->head_count ?? 0,
            'salary_range' => $request->salary_range ?? 0,
            'workplace_type' => $request->workplace_type,
            'job_pipeline_stages' => $request->job_pipeline_stages,
            'privacy_settings' => $request->privacy_settings,
        ]);

        $job->save();

        if ($job->id){
            return response()->json('Job added successfully!');
        } else {
            return response()->json(['message' => 'Failed to create the job'], 422);
        }
    }

    public function edit($id) 
    {
        $job = Job::find($id);
        return view('jobs.job-edit', compact('job'));
    }

    public function details($id)
    {
        $job = Job::find($id);
        if (!$job){
            return redirect()->route('index')->withErrors([
                'message' => 'Job not found',
                'status' => 'error'
            ]);
        }

        return view('jobs.job-details', compact('job'));
    }

    public function getDepartments(Request $request) 
    {
        $departments = [];
        if ($request->ajax()) {
            $search = $request->q;
            $departments = Department::select('id', 'name')
                        ->where('name','LIKE','%'. $search .'%')
                        ->orderBy('name','asc')
                        ->get();
        }
        return response()->json($departments);
    }

    public function getHiringManagers(Request $request) 
    {
        $hiring_managers = [];
        if ($request->ajax()) {
            $search = $request->q;
            $hiring_managers = HiringManager::select('id', 'name')
                        ->where('name','LIKE','%'. $search .'%')
                        ->orderBy('name','asc')
                        ->get();
        }
        return response()->json($hiring_managers);
    }

    public function getLocations(Request $request) 
    {
        $locations = [];
        if ($request->ajax()) {
            $search = $request->q;
            $locations = Location::select('id', 'name')
                        ->where('name','LIKE','%'. $search .'%')
                        ->orderBy('name','asc')
                        ->get();
        }
        return response()->json($locations);
    }

    public function getEmploymentTypes(Request $request) 
    {
        $employment_types = [];
        if ($request->ajax()) {
            $search = $request->q;
            $employment_types = EmploymentType::select('id', 'name')
                        ->where('name','LIKE','%'. $search .'%')
                        ->orderBy('name','asc')
                        ->get();
        }
        return response()->json($employment_types);
    }

    public function getWorkplaceTypes(Request $request) 
    {
        $workplace_types = [];
        if ($request->ajax()) {
            $search = $request->q;
            $workplace_types = WorkplaceType::select('id', 'name')
                        ->where('name','LIKE','%'. $search .'%')
                        ->orderBy('name','asc')
                        ->get();
        }
        return response()->json($workplace_types);
    }

    public function getJobPipelineStages(Request $request) 
    {
        $job_pipeline_stages = [];
        if ($request->ajax()) {
            $search = $request->q;
            $job_pipeline_stages = JobPipelineStage::select('id', 'name')
                        ->where('name','LIKE','%'. $search .'%')
                        ->orderBy('name','asc')
                        ->get();
        }
        return response()->json($job_pipeline_stages);
    }

    public function getPrivacySettings(Request $request) 
    {
        $privacy_settings = [];
        if ($request->ajax()) {
            $search = $request->q;
            $privacy_settings = PrivacySetting::select('id', 'name')
                        ->where('name','LIKE','%'. $search .'%')
                        ->orderBy('name','asc')
                        ->get();
        }
        return response()->json($privacy_settings);
    }

    public function departmentExist(Request $request) {
        $isDepartmentExist = Department::where('name', $request->name)->exists();
        if (!$isDepartmentExist) {
            return response()->json(false);
        }
       return response()->json(true);
    }

}
