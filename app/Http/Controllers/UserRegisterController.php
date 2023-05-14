<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserRegisterController extends Controller
{
    public function index()
    {
        return view('user.register');

    }

    public function register()
    {
        $this->validate(request(),[
            'username' => 'required',
            'email' => 'required|email|max:255|unique:users|ends_with:orbitbd.net,race.net.bd',
            'password' => 'required|confirmed'
        ]);
//
//        if(request()->hasFile('image')) {
//            $imageName = uniqid().'.jpg';
//            request()->file('image')->move('image/',$imageName);
//            User::create([
//                'username' => request('username'),
//                'email' => request('email'),
//                'password' => bcrypt(request('password')),
//                'image' => $imageName
//            ]);
//        }else{
//            User::create([
//                'username' => request('username'),
//                'email' => request('email'),
//                'password' => bcrypt(request('password')),
//            ]);
//        }

        User::create([
            'username' => request('username'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),

        ]);

        return redirect()->route('user.register')->with('registerSuccess','Register Successful!');


    }

    public function see(){
        $users = User::latest()->paginate(10);
        return view('admuse.showUsers',compact(['users']));


    }
    
    public function delete($id)
    {
        User::where('id',$id)->delete();
        return redirect()->route('user.see')->with('deleteSuccess', 'Deleted Successfully!');
    }
    
    
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('user.edit', compact('user'));

    }


    public function update($id)
    {
        $user = User::where('id', $id);
        $user->update([
            'username' => request('username'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
        return redirect()->route('user.see')->with('updateSuccess', 'Update Successfully!');
    }

}
