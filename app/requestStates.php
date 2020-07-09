<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class requestStates extends Model
{
    public function requests(){

        return $this->hasMany(requests::class);
    }

    public function savestate($data)
    {
        $this->state = $data['state'];
        
        $this->save();
        return 1;
    }

    public function updatestate($data)
    {
        $this->state = $data['state'];
        
        $this->save();
        return 1;
    }
}
