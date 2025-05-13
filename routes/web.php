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

/**
 * Returns an array of tasks. Each task is an associative array that holds information
 * about some funny thing to do.
 *
 * @return array[]
 */
function loadTasks(): array
{
    return [
        [
            "id" => 1,
            "title" => "Write a love letter to Laravel",
            "description" => "Compose a heartfelt love letter to <i>Laravel</i>, explaining how it has revolutionized your coding life. Express your deep affection for <strong>eloquent relationships</strong> and <strong>artisan</strong> commands.",
            "priority" => 3,
            "state" => "new",
            "time_estimated" => 15,
            "time_spent" => 0,
            "created_at" => "2023-10-15 09:00:00",
            "updated_at" => "2023-10-15 09:30:00",
            "completed_at" => null
        ],
        [
            "id" => 2,
            "title" => "Have a debate with a coding error",
            "description" => "Engage in a passionate debate with a coding error in your <i>Laravel</i> project. Argue your case for why it should work, and listen to its 'arguments' for why it won't.",
            "priority" => 2,
            "state" => "completed",
            "time_estimated" => 10,
            "time_spent" => 35,
            "created_at" => "2023-09-20 14:15:00",
            "updated_at" => "2023-09-20 14:45:00",
            "completed_at" => "2023-09-20 14:50:00"
        ],
        [
            "id" => 3,
            "title" => "Conduct a 'Laravel Bake-Off",
            "description" => "Challenge yourself to a '<i>Laravel</i> Bake-Off' where you create different <i>Laravel</i> projects with unusual names like 'CakeBoss' and 'CookieMonsta.' See which one turns out the most delicious.",
            "priority" => 4,
            "state" => "in progress",
            "time_estimated" => 30,
            "time_spent" => 4,
            "created_at" => "2023-08-05 11:30:00",
            "updated_at" => "2023-08-05 12:15:00",
            "completed_at" => null
        ],
        [
            "id" => 4,
            "title" => "Create a 'Migration' for your sock drawer",
            "description" => "Generate a <i>Laravel</i> migration to organize and maintain your sock drawer. Make sure your sock 'schema' is well-structured and relationships between socks are <strong>eloquent</strong>.",
            "priority" => 1,
            "state" => "completed",
            "time_estimated" => 5,
            "time_spent" => 10,
            "created_at" => "2023-07-10 17:45:00",
            "updated_at" => "2023-07-10 17:50:00",
            "completed_at" => "2023-07-10 17:55:00"
        ],
        [
            "id" => 5,
            "title" => "Build a 'Laravel Artisan' shrine",
            "description" => "Construct a small shrine to the <i>Laravel</i> <strong>Artisan</strong> command in your workspace. Pray to it daily for quick and bug-free <strong>migrations</strong> and <strong>seedings</strong>.",
            "priority" => 2,
            "state" => "in progress",
            "time_estimated" => 45,
            "time_spent" => 37,
            "created_at" => "2023-06-25 10:00:00",
            "updated_at" => "2023-06-25 11:00:00",
            "completed_at" => null
        ],
        [
            "id" => 6,
            "title" => "Laravel Task Scheduler Challenge",
            "description" => "Configure a <strong>task scheduler</strong> to automatically water your real plants, name them 'Lara,' and have them thank you in a log file.",
            "priority" => 3,
            "state" => "on hold",
            "time_estimated" => 20,
            "time_spent" => 0,
            "created_at" => "2023-05-15 12:30:00",
            "updated_at" => "2023-05-15 12:50:00",
            "completed_at" => null
        ]
    ];
}

/*
 * The home route, that shows the welcome view.
 */
Route::get('/', function () {
    return view('welcome');
})->name('home');

