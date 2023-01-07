<?php

namespace Tests\Feature;

use App\Mail\RequestContact;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ResumeControllerTest extends TestCase
{
    /** @test */
    public function guest_can_see_the_resume()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Développeur PHP');
    }

    /** @test */
    public function guest_can_download_resume()
    {
        $response = $this->get('/download');

        $response->assertDownload('marc-collet-resume.pdf');
    }

    /** @test */
    public function guest_can_send_contact_mail()
    {
        Mail::fake();

        $response = $this->post('/contact', [
            'name' => 'TEST',
            'firstname' => 'Joe',
            'email' => 'joe@test.com',
            'phone' => '0612345678',
            'message' => 'This is a contact message'
        ]);

        $response->assertRedirect(route('resume.index') . '#contact');
        $response->assertSessionHas('success', 'Merci !! Votre demande de contact a bien été envoyée');

        Mail::assertSent(RequestContact::class);
    }
}
