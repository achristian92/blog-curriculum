<?php


namespace App\Repositories\Backend\User;


interface UserInterface
{
    public function find($id);
    public function getAllUsers($id);
    public function create($requestData);
    public function update($requestData,$id);

}