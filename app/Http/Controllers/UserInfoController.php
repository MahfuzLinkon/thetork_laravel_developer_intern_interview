<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return  view('user-info.index', [
            'user_infos' => UserInfo::latest()->get(),
        ]);
    }


    public function create()
    {
        return view('user-info.create');
    }


    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:user_infos',
            'other_info' => 'required',
        ]);
        UserInfo::userInfoUpdateOrCreate($request);
        return redirect()->back()->with('success', 'New User Information Created Successfully !');
    }


    public function show($id)
    {
        return view('user-info.show', [
            'userInfo' => UserInfo::find($id),
        ]);
    }


    public function edit($id)
    {
        return view('user-info.edit', [
            'userInfo' => UserInfo::find($id),
        ]);
    }


    public function update(Request $request, $id)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'other_info' => 'required',
        ]);
        UserInfo::userInfoUpdateOrCreate($request, $id);
        return redirect('/user-info')->with('success', 'User Information Updated Successfully !');
    }

    public function destroy($id)
    {
        UserInfo::find($id)->delete();
        return redirect('/user-info')->with('success', 'User Information Deleted Successfully !');
    }
}
