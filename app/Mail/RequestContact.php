<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RequestContact extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        private array $contactInfos
    ) {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [
                new Address($this->contactInfos['email']),
            ],
            subject: 'Demande de contact',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact',
            with: [
                'name' => $this->contactInfos['name'],
                'firstname' => $this->contactInfos['firstname'],
                'email' => $this->contactInfos['email'],
                'phone' => $this->contactInfos['phone'] ?? null,
                'message' => $this->contactInfos['message'],
            ]
        );
    }
}
