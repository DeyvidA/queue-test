<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessSubmission;

class SubmissionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $data = $request->only(['name', 'email', 'message']);

        ProcessSubmission::dispatch($data);

        return response()->json(['message' => 'Submission received.']);
    }

}
