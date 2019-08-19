<?php


namespace App\Repositories\Backend\User;


interface UserInterface
{
    public function index();
    public function find($id);
    public function getAllUsers($id);
    public function create();
    public function store($requestData);
    public function edit($id);
    public function update($requestData,$id);

}