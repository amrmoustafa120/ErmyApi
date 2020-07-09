<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    public function reqquest_user(){

        return $this->hasMany(requests::class);
    }
    public function reqquest_worker(){

        return $this->hasMany(requests::class,'worker_id');
    }

    public function type(){

        return $this->hasMany(UserTypes::class, 'type_id');
    }

    public function contracts(){

        return $this->hasMany(contracts::class);
    }

    public function complaines(){

        return $this->hasMany(complaines::class);
    }

    public function saveuser($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->phone = $data['phone'];
        $this->address = $data['address'];
        $this->password = $data['password'];
        $this->type_id = $data['type_id'];
        
        $this->save();
        return 1;
    }

    public function updateuser($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->phone = $data['phone'];
        $this->address = $data['address'];
        $this->password = $data['password'];
        $this->type_id = $data['type_id'];
        
        $this->save();
        return 1;
    }

    
}
