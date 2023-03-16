<?php

namespace App\Http\Services;

use App\Http\Repositories\CandidateRepository;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class CandidateService
{
    public static function create($request): void
    {
        $file = $request->validate([
            'name' => 'string|required',
            'email' => 'string|required',
            'phone' => 'string|required',
            'desired_job' => 'string|required',
            'schooling' => 'string|required',
            'observations' => 'string|nullable',
            'file' => 'required|file|max:1024|mimes:doc,docx,pdf', 
        ]);

        if ($file) {
            $request->file = $request->file->store('candidates');
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->email,
            'desired_job' => $request->desired_job,
            'schooling' => $request->schooling,
            'observations' => $request->observations,
        ];

        CandidateService::sendEmail($data);

        CandidateRepository::create($request);
    }

    public static function sendEmail($data)
    {
        Mail::to('test@gmail.com')
            ->send(new SendMail($data));
    }
}