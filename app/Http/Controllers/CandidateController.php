<?php

namespace App\Http\Controllers;

use App\Http\Services\CandidateService;
use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function create(Request $request)
    {
        CandidateService::create($request);

        return view('welcome');
    }
}
