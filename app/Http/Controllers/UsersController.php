<?php

namespace App\Http\Controllers;

use App\Images;
use App\Products;
use App\User;
use App\Package;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user() && Auth::user()->admin == "1") {
            $users = DB::select("select users.*,IFNULL(package.name, \"-\") as package_name from users left join package on users.package_id=package.id where user_type='user'");
            return view('users.index', ["users" => $users]);
        } else {
            return redirect(url('/'));
        }
    }


    public function showUsersByType($type)
    {
        if (Auth::user() && Auth::user()->admin == "1") {
            $users = DB::select("select users.*,IFNULL(package.name, \"-\") as package_name from users left join package on users.package_id=package.id where user_type='".$type."'");
            return view('users.usersbytype', ["users" => $users]);
        } else {
            return redirect(url('/'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user() && Auth::user()->admin == "1") {
            $packages = Package::all();
            return view('users.create', ["packages" => $packages]);
        } else {
            return redirect(url('/'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (Auth::user() && Auth::user()->admin == "1") {
            $user = new User();
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->birthdate = $request->birthdate;
            $user->package_id = $request->package_id;
            $user->OS = $request->OS;
            $user->gender = $request->gender;
            $user->active = $request->active;
            $save = $user->save();
            if ($save) {
                return redirect(url('/admin/users'));
            }
        } else {
            return redirect(url('/'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if (Auth::user() && Auth::user()->admin == "1") {

        } else {
            return redirect(url('/'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if (Auth::user() && Auth::user()->admin == "1") {
  
            $user = User::find($id);
            return view('users.edit', [ "user" => $user]);
        } else {
            return redirect(url('/'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if (Auth::user() && Auth::user()->admin == "1") {
            $user = User::find($request->user_id);
            $user->name = $request->name;
            $user->email = $request->email;
            if($request->password) {
                $user->password = bcrypt($request->password);
            }
            $user->save();
            return redirect("/admin/home");
        } else {
            return redirect(url('/'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (Auth::user() && Auth::user()->admin == "1") {

        } else {
            return redirect(url('/'));
        }
    }

    public function admins()
    {


        if (Auth::user() && Auth::user()->admin == "1") {
            $users = DB::select("select users.*,IFNULL(package.name, \"-\") as package_name from users left join package on users.package_id=package.id where users.admin=1");
            return view('users.index', ["users" => $users]);
        } else {
            return redirect(url('/'));
        }


    }


    public function edit_user_password($id)
    {

        if (Auth::user() && Auth::user()->admin == "1") {
            $user = User::find($id);
            return View('users.edit_password', ["user" => $user]);
        } else {
            return redirect(url('/'));
        }
    }

    public function update_user_password(Request $request)
    {
        if (Auth::user() && Auth::user()->admin == "1") {
            $user = User::find($request->user_id);
            $user->password = bcrypt($request->password);
            $user->save();
            return View('users.edit_password', ["user" => $user]);
        } else {
            return redirect(url('/'));
        }
    }

    public function logout()
    {
        if (Auth::user()) {
            Auth::logout();
        }
        return redirect('/');
    }


    public function status_active(Request $request)
    {
        if (User::find(Auth::id())->admin == "1") {
            $user = User::find($request->id);
            if ($request->has('active')) {
                if ($request->active == 'on') {
                    $user->active = 'true';
                } else {
                    $user->active = 'false ';
                }
            } else {
                $user->active = 'false ';
            }
            $user->save();
            return redirect("/admin/areas");
        } else {
            return redirect(url('/'));
        }
    }

    public function search($_search)
    {
        if (User::find(Auth::id())->admin == "1") {
            $search = '%';
            if ($_search != "all" && $_search != "") {
                $search = "%" . $_search . "%";
            }
            $users = DB::select("select users.*,IFNULL(package.name, \"-\") as package_name 
from users left join package on users.package_id=package.id where users.name like '$search' or users.phone like '$search'");
            return view('users.index', ["users" => $users, "search" => $_search]);
        } else {
            return redirect(url('/'));
        }
    }
}
