<?php

namespace App\Http\Services;

use App\Http\Repositories\CandidateRepository;

class CandidateService
{
    public static function create($request)
    {

        $file = $request->validate([
            'file' => 'required|file|max:1024|mimes:doc,docx,pdf', 
        ]);

        if ($file) {
            $request->file = $request->file->store('candidates');
        }
        // dd($request->file);

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