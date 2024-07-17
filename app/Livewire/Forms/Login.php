<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $password;
    public $email;

    protected $rules = [
        'password' => 'required|min:3',
        'email' => 'required|email',
    ];

    public function submit()
    {
        $this->validate();
        $user = User::where('email', $this->email)->first();
        if (!$user || !Hash::check($this->password, $user->password)) {
            $this->addError('login', 'Email or password is incorrect. Try again.');
        } else {
            Auth::login($user);
            session()->regenerate();
            return redirect()->intended('/dashboard');
        }
    }


    public function render()
    {
        return view('livewire.forms.login');
    }
}
