<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\RequestContact;
use Illuminate\Config\Repository as Config;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ResumeController extends Controller
{
    public function __construct(
        private Config $config,
    ) {
    }

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
        $mail = new RequestContact($request->validated());

        Mail::to($this->config->get('mail.from.address'))->send($mail);

        return redirect()->route('resume.index')
            ->withFragment('contact')
            ->with('success', __('resume.index.contact.success'));
    }
}
