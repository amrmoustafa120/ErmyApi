<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTypes extends Model
{
    public function users(){

        return $this->belongsTo(User::class);
    }

    public function savetype($data)
    {
        $this->type = $data['type'];
        
        if($data['is_internal']=='internal'){
            $this->is_internal=1;
        }else{
            $this->is_internal=0;
        }
        $this->save();
        return 1;
    }

    public function updatetype($data)
    {
        $this->type = $data['type'];

        if($data['is_internal']=='internal'){
            $this->is_internal=1;
        }else{
            $this->is_internal=0;
        }
        $this->save();
        return 1;
    }
}
