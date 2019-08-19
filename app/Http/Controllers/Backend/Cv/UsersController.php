<?php

namespace App\Http\Controllers\Backend\Cv;

use App\Repositories\Backend\User\UserRepository;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    protected $user;
   public function __construct(UserRepository $userRepo)
   {
       $this->user = $userRepo;
   }

    public function index()
    {
        return $this->user->index();
    }

    public function create()
    {
        return $this->user->create();
    }

    public function store(Request $request)
    {
        return $this->user->store($request->all());
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return $this->user->edit($id);
    }

    public function update(Request $request, $id)
    {
        return $this->user->update($request->all(),$id);
    }

    public function destroy($id)
    {
        //
    }
    public function trashed()
    {

    }
    public function trash(User $user)
    {
      return "entro";
    }
    public function restore($id)
    {

    }
}
