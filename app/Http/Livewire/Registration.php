<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Faker\Guesser\Name;
use Livewire\Component;


class Registration extends Component
{
    
    public $name;
    public $password;
    public $email;
    public $bio;

    public function render()
    {
        return view('livewire.registration');
    }
    public function submit()
    {
        $this->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:3|max:10',


        ]);
        $user= new User;
        $user->name=$this->name;
        $user->email=$this->email;
        $user->password=$this->password;
        $user->bio=$this->bio;
        $user->save();
        session()->flash('success', 'Your data is Submitted');
        return redirect()->to('/register');
        // dd($this->name, $this->password, $this->email);

    }
}
