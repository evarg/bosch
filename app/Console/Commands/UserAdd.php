<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserAdd extends Command
{
    protected $signature = 'user:add
                {nick : Unique nick of the user}
                {email : Unique email of the user}
                {--name= : Name of the user (default is nick)}
                {--surname= : Surname of the user}';

    protected $description = 'Create a new user in the database';

    public function handle()
    {
        // Pobranie argumentów
        $nick = $this->argument('nick');
        $email = $this->argument('email');

        $name = $this->option('name') ?: $nick;
        $surName = $this->option('surname') ?: '';

        // Sprawdzenie, czy użytkownik o tym nicku lub emailu już istnieje
        if (User::where('nick', $nick)->exists()) {
            $this->error("User with this nickname already exists.");
            return;
        }

        if (User::where('email', $email)->exists()) {
            $this->error("User with this email address already exists.");
            return;
        }

        // Tworzenie hasła jako odwrotna wersja nicku
        $password = strrev($nick);

        // Tworzenie użytkownika
        User::create([
            'nick' => $nick,
            'email' => $email,
            'name' => $name,
            'surname' => $surName,
            'password' => Hash::make($password), // Haszowanie hasła
        ]);

        $this->info("The password is the user's nickname written backwards.");
        $this->info("User registered successfully!");
    }
}
