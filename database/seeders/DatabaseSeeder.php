<?php

namespace Database\Seeders;

use App\Models\Events;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'asd@asd.com',
            'name' => 'asd',
            'password' => Hash::make('asd')
        ]);

        Events::create([
            'title' => 'Hari Ibu',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ut elementum nisl, sed venenatis risus. Pellentesque leo leo, scelerisque et justo sit amet, tincidunt venenatis enim. Morbi dictum in augue sed egestas. Quisque vitae sapien in sapien viverra tristique a id nisl. Sed dui ligula, aliquet et blandit at, molestie sit amet felis. Nullam at pulvinar nibh. Vivamus euismod eu purus a elementum. Nulla in nibh rhoncus ex pellentesque volutpat. Nunc scelerisque venenatis molestie. Suspendisse suscipit pellentesque magna ut vestibulum. Aliquam erat volutpat. Ut elementum justo eu erat porta euismod. Suspendisse potenti. Vivamus semper est commodo, dapibus eros id, pulvinar nisi.'
        
        ]);
    }
}
