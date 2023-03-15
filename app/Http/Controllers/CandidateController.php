<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCandidateRequest;
use App\Http\Services\CandidateService;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function create(Request $request)
    {
        CandidateService::create($request);

        return redirect('/')->withSuccess('Currículo enviado com sucesso!');
    }
}
