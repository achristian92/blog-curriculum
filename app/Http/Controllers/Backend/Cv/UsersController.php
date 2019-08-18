<?php

namespace App\Http\Controllers\Backend\Cv;

use App\Repositories\Backend\User\UserRepository;
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
        return view('cv.users.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
