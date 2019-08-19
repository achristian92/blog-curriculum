<?php


namespace App\Repositories\Backend\User;


use App\Models\Cv\Profile;
use App\User;
use Auth;

class UserRepository implements UserInterface
{
    public function index()
    {
        $users = User::with('profile')->get();
        $has_profile = Profile::where('user_id',Auth::id())->first();

       return view('cv.users.index',compact('users','has_profile'));
    }
    public function find($id)
    {
        // TODO: Implement find() method.
    }

    public function getAllUsers($id)
    {
        // TODO: Implement getAllUsers() method.
    }

    public function create()
    {
        $user_profile = Profile::where('user_id',Auth::id())->first();
        if (!$user_profile){
            return view('cv.users.create');
        }
        return redirect()->route('user.index')->with('warning', 'Tienes un Perfil ya registrado');
    }
    public function store($requestData)
    {
        Profile::create($requestData);
        return redirect()->route('user.index')->with('info', 'Perfil creado con exito');
    }

    public function update($requestData, $id)
    {
        $profile = Profile::where('user_id',$id)->first();
        $profile->update($requestData);
        return redirect()->route('user.index')->with('info', 'Perfil actualizado con exito');
    }


    public function edit($id)
    {
        $user = User::with('profile')->find(Auth::id());
        return view('cv.users.edit',compact('user'));
    }
}