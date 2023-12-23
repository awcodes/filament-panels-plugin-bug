<?php

namespace App\Filament\Pages\Auth;

use Filament\Pages\Auth\Login as FilamentLogin;

class Login extends FilamentLogin
{
    public function mount(): void
    {
        $this->form->fill([
            'email' => 'test@example.com',
            'password' => 'password',
        ]);
    }
}
