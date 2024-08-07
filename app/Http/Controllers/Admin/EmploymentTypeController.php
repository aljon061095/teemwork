<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\EmploymentType;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class EmploymentTypeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = EmploymentType::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.employment_types.employment_types');
    }

    public function create() 
    {
        return view('users.users-add');
    }

    public function edit($id) {
        $user = User::find($id);
        return view('users.users-edit', compact('user'));
    }

    public function delete($id) {
        $employmentType = EmploymentType::find($id);
        if (!empty($employmentType)) { 
            $employmentType->delete();
            return response()->json(true);
        }
        return response()->json(false);
    }
}
