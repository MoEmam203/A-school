<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //  Show Users
    public function allstudents(){
        $users = User::where('is_admin','student')->get();
       return view('admin.users.allstudents',['users' => $users]);
    }

    public function allparents()
    {
        
        $users = User::where('is_admin', 'parent')->get();
        return view('admin.users.allparents', ['users' => $users]);
    }

    // Add user
    public function create(){
        return view('admin.users.adduser');
    }

    public function store(){
        request()->validate([
            'id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'is_admin' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'type' => 'required',
            'age' => 'required',
            'blood_type' => 'required', 
            'image' =>'required|image',
            'level' => 'nullable',
            'parent_id' => 'nullable',
            'job' => 'nullable',
        ]);

        $user = new User();

        $user_image = request('image');
        $user_image_new_name = time() . $user_image->getClientOriginalName();
        $user_image->move('uploads/users',$user_image_new_name);
        $user->img = 'uploads/users/' . $user_image_new_name;

        $user->id = request('id');
        $user->name = request('name');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->is_admin = request('is_admin');
        $user->dob = request('dob');
        $user->address = request('address');
        $user->type = request('type');
        $user->age = request('age');
        $user->blood_type = request('blood_type');
        // $user->img = request('image');
        $user->level = request('level');
        $user->parent_id = request('parent_id');
        $user->job = request('job');
        // dd($user);
        // dd($user_image_new_name);
        $user->save();
        Session()->flash('success', 'User saved succesfully');
        return redirect('/admin/create');
    }


    // User all information
    public function allinfo($id){
        $user = User::find($id);
        return view('admin.users.allinfo', ['user' => $user]);
    }


    // edit user
    public function edit($id){
        $user = User::find($id);
        return view('admin.users.edituser',['user'=>$user]);
    }

    // update user 
    public function update(Request $request,$id){
        request()->validate([
            'id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            
            'is_admin' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'type' => 'required',
            'age' => 'required',
            'blood_type' => 'required',
            'image' => 'image',
            'level' => 'nullable',
            'parent_id' => 'nullable',
            'job' => 'nullable',
        ]);

        $user = User::find($id);

        if ($request->hasFile('image')) {
            $user_image = request('image');
            $user_image_new_name = time() . $user_image->getClientOriginalName();
            $user_image->move('uploads/users', $user_image_new_name);
            $user->img = 'uploads/users/' . $user_image_new_name;
            $user->save();
        }

        $user->id = request('id');
        $user->name = request('name');
        $user->email = request('email');
        // if($request->has('password')){
        // $user->password = Hash::make(request('password'));
        // }
        if(request('password')){
            $user->password = Hash::make(request('password'));
        }
        $user->is_admin = request('is_admin');
        $user->dob = request('dob');
        $user->address = request('address');
        $user->type = request('type');
        $user->age = request('age');
        $user->blood_type = request('blood_type');
        // $user->img = request('image');
        $user->level = request('level');
        $user->parent_id = request('parent_id');
        $user->job = request('job');
       
        
        // dd($user);
        $user->save();
        Session()->flash('success', 'User saved succesfully');
        return redirect()->back();
    }


    // Delete User

    public function destroy($id){
        $user = User::find($id);

        if(file_exists($user->img)){
            unlink($user->img);
        }

        if($user->is_admin == 'student'){
            $user->delete();

            Session()->flash('success', 'User Deleted succesfully');
            return redirect('/admin');
        }

        $user->delete();

        Session()->flash('success', 'User Deleted succesfully');
        return redirect('/admin/parents');

    }
}
