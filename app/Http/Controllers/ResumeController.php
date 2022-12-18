<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ResumeController extends Controller
{
    public function index(): View
    {
        return view('resume.index');
    }

    public function download(): BinaryFileResponse
    {
        $resume = storage_path('app/downloads/marc-collet-resume.pdf');

        return response()->download($resume);
    }

    public function contact(ContactRequest $request): RedirectResponse
    {


        return redirect()->route('resume.index');
    }
}
