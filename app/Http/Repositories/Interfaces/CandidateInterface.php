<?php

namespace App\Http\Repositories\Interfaces;

interface CandidateInterface
{
    public static function create($request): void;
}