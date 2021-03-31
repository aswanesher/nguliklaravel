<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendWelcomeEmail;
use Carbon\Carbon;

class JobController extends Controller
{
    /**
     * Handle Queue Process
     */
    public function processQueue()
    {
        $emailJob = new SendWelcomeEmail();
        dispatch($emailJob)->delay(Carbon::now()->addMinutes(5));
    }
}
