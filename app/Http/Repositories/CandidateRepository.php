<?php

namespace App\Http\Repositories;

use App\Http\Repositories\Interfaces\CandidateInterface;
use App\Models\Candidate;

class CandidateRepository implements CandidateInterface
{
    public static function create($request): void
    {
        $clientIP = request()->ip();

        Candidate::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'desired_job' => $request->desired_job,
            'schooling' => $request->schooling,
            'observations' => $request->observations,
            'file' => $request->file,
            'ip' => $clientIP
        ]);
    }
}