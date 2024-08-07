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
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('jobs.jobs');
    }

    public function create() 
    {
        return view('jobs.jobs-add');
    }

    public function details(Request $request)
    {
        return view('jobs.job-details');
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
