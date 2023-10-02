<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings', [
                'heading'=> 'Latest Listings',
                'listings' => [
                    [
                        'id' => 1,
                        'title' => 'Title 1',
                        'description' => 'Software engineers create and develop computer programs and applications. Learn about the history, skills, salary, and career paths of this profession, as well as the difference between software developer and software engineer. Find out how to become a software engineer with education requirements, key skills, and examples of similar careers.'
                    ],
                    [
                        'id' => 2,
                        'title' => 'Title 2',
                        'description' => 'A security analyst is responsible for detecting and preventing threats to a company or organization. Their main job is to safeguard information, data, employees and clients from being hacked or cyber-attacked. They uncover weaknesses in the infrastructure and find the most forward-thinking ways of providing protection.'
                    ]
                    ]
    ]);
});
