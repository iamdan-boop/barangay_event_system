<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

use App\Models\User;
use App\Models\Event;

class AdminController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function home()
    {
        return view('admin.home');
    }
    public function user_list()
    {
        $users =  User::whereHas('roles', function ($query) {
            $query->where('name','!=', 'admin');
        })->get();


        $total_user = User::whereHas('roles', function ($query) {
            $query->where('name','!=', 'admin');
        })->count();

        $total_user_active = User::where('status_id',1)->whereHas('roles', function ($query) {
            $query->where('name','!=', 'admin');
        })->count();

        $total_user_deactivated = User::where('status_id',0)->whereHas('roles', function ($query) {
            $query->where('name','!=', 'admin');
        })->count();

        return view('admin.users',compact('users','total_user','total_user_active','total_user_deactivated'));
    }
    public function deactiave($id)
    {
        $find_user = User::find($id);
        if($find_user)
        {
            $find_user->update(['status_id'=> 0]);
            return back()->with('success','User Deactivated Successfully');
        }
    }
    public function activate($id)
    {
        $find_user = User::find($id);
        if($find_user)
        {
            $find_user->update(['status_id'=> 1]);
            return back()->with('success','User Activated Successfully');
        }
    }
    public function get_user(Request $request)
    {
        $find_user = User::find($request->user_id);
        if($find_user)
        {
            $find_user['role_name'] = $find_user->getRoleNames()[0];
            return response()->json( $find_user );
        }

    }
    public function update_user(Request $request)
    {
        $validate = $request->validate([
            'first_name'    => 'required',
            'last_name'    => 'required',
            'address'    => 'required',
            'dob'    => 'required',
            'gender'    => 'required',
            'user_type'    => 'required',
            'email'    => 'required',
            'contact'    => 'required',
            // 'password'    => 'required',
            // 'repeat_password'    => 'required | same:password',
        ]);

        // unset($validate['repeat_password']);
        // unset($validate['password']);
        unset($validate['user_type']);
        unset($validate['user_id']);
        //$validate['password'] = bcrypt($request->password);
        //$validate['status_id'] = 1;

        if(isset($request->password)){
            $validate['password'] = bcrypt($request->password);
        }


        $find_user = User::find($request->user_id);

        if($find_user)
        {
            $find_user->update($validate);
            $find_user->roles()->detach();
            $find_user->assignRole($request->user_type);
            return back()->with('success','Registered Successfully!');
        }


    }

    public function index(Request $request)
    {
        if($request->ajax()) {

            $data = Event::whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->get(['id', 'title', 'start', 'end']);

            return response()->json($data);
        }
    }
    public function ajax(Request $request)
    {

        switch ($request->type) {
            case 'add':
                $event = Event::create([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);

                return response()->json($event);
                break;

            case 'update':
                $event = Event::find($request->id)->update([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);

                return response()->json($event);
                break;

            case 'delete':
                $event = Event::find($request->id)->delete();

                return response()->json($event);
                break;

            default:
                # code...
                break;
        }
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function profile_check(Request $request)
    {
        $validate = $request->validate([
            'first_name'    => 'required',
            'last_name'    => 'required',
            'address'    => 'required',
            'dob'    => 'required',
            'gender'    => 'required',

            'email'    => 'required',
            'contact'    => 'required',
            // 'password'    => 'required',
            // 'repeat_password'    => 'required | same:password',
        ]);

        if(isset($request->password)){
            $validate['password'] = bcrypt($request->password);
        }

        $find = User::find(Auth::id());

        if($find)
        {
            $find->update($validate);
            return back()->with('success','Profile Updated Successfully!');
        }
    }
}
