<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\HiringManager;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class HiringManagerController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = HiringManager::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.hiring_managers.hiring_managers');
    }

    public function create() 
    {
        return view('users.users-add');
    }

    public function edit($id) {
        $user = User::find($id);
        return view('users.users-edit', compact('user'));
    }
}
