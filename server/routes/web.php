<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Member;
use App\Models\Team;
use App\Models\TeamMember;
use App\Models\Candidate;
use App\Models\CandidateSkill;
use App\Models\CandidateContact;
use App\Models\Interview;
use App\Models\Interviewer;
use App\Models\InterviewerComment;
use App\Models\Configuration;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    $elm = Configuration::find(25);
    return $elm->candidate_use_skills;
});