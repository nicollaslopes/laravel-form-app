<?php

namespace App\Http\Services;

use App\Http\Repositories\CandidateRepository;

class CandidateService
{
    public static function create($request): void
    {

        // $input = $request->validate([
        //     'name' => 'string|required',
        //     'email' => 'string|required',
        //     'phone' => 'string|required',
        //     'desired_job' => 'string|required',
        //     'schooling' => 'string|required',
        //     'observations' => 'string',
        //     'file' => 'file|required',
        //     'ip' => 'string|required'
        // ]);

        // dd($input);

        CandidateRepository::create($request);
    }
}