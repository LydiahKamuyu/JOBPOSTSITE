<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run():void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Listing::create([
            'title' => 'Mobile Senior Developer',
            'tags' => 'React, Javacsript',
            'company' => 'AndroidKE Corp',
            'location' => 'Mombasa',
            'email' => 'androidke@corp.com',
    //I should come back to check why 'website' => 'https://www.androidke.com' did not work
            'description' => 'Discover how Android connects your devices. Sync your Android phone with your TV, watch or car for a unified experience. Move from one device to another seamlessly and make everything work better together. Securely and swiftly transfer large files to Android phones, tablets and Chromebooks, even when offline.',

        ]);
        Listing::create([
            'title' => 'Mobile Senior Developer',
            'tags' => 'React, Javacsript',
            'company' => 'AndroidKE Corp',
            'location' => 'Mombasa',
            'email' => 'androidke@corp.com',
        //I should come back to check why 'website' => 'https://www.androidke.com' did not work
            'description' => 'Discover how Android connects your devices. Sync your Android phone with your TV, watch or car for a unified experience. Move from one device to another seamlessly and make everything work better together. Securely and swiftly transfer large files to Android phones, tablets and Chromebooks, even when offline.',

        ]);
    }
}
