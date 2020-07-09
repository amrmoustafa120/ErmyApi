<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class requests extends Model
{
    public function user(){

        return $this->belongsTo(User::class);
    }

    public function worker(){
        return $this->belongsTo(User::class, 'worker_id');
    }

    public function states(){

        return $this->hasMany(requeststates::class, 'state_id');
    }

    public function saverequest($data)
    {
        // $this->name = $data['name'];
        // $this->email = $data['email'];
        // $this->phone = $data['phone'];
        // $this->address = $data['address'];
        // $this->password = $data['password'];
        // $this->type_id = $data['type_id'];
        
        // $this->save();
        return 1;
    }

}
