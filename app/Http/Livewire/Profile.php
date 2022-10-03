<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        $data=['name'=>'Mr Abhi','email'=>'abhi@test.com'];
        return view('liv
        ewire.profile',['data'=>$data]);
    }
}
