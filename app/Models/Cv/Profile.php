<?php

namespace App\Models\Cv;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id','first_name','last_name','description','birthdate','img','celular','adress','url_cv'];
    public function user() { return $this->belongsTo(User::class); }


    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
