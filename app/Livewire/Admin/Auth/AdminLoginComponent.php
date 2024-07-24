<?php

namespace App\Livewire\Admin\Auth;

use Livewire\Component;
use Livewire\Attributes\Validate;

class AdminLoginComponent extends Component
{
    #[Validate('required', message: 'Please provide your email address')] 
    #[Validate('email',message:'The input field must be a valid email address.')] 
    public $email;
    #[Validate('required|min:3')] 
    public $password;
    #[Validate('nullable')] 
    public $remember;


    
    function submit()
    {
        $this->validate();
    }
    
    public function render()
    {
        return view('livewire.admin.auth.admin-login-component');
    }
}
