<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'=>'Patient Name',
            'email' => 'patient@mail.com',
            'password' => Hash::make('password'),
            'role'=>'pasien',
        ]);

        User::create([
            'name' => 'Doctor Name',
            'email' => 'doctor@mail.com',
            'password' => Hash:: make('password'),
            'role'=>'dokter',
        ]);

        User::create([
            'name' => 'Admin Name',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
            'role'=>'admin',
        ]);
    }
             
 }

