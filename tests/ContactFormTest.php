<?php

namespace Tests;

use App\Models\Contact;
use Laravel\Lumen\Testing\DatabaseMigrations;

class ContactFormTest extends TestCase
{
    use DatabaseMigrations;

    public function test_contact_form_submission()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Test Subject',
            'message' => 'Test message content.',
        ];

        $this->post('/contact', $data, ['HTTP_REFERER' => '/contact']);

        $this->seeStatusCode(302);
        $this->assertEquals($this->prepareUrlForRequest('/contact'), $this->response->headers->get('Location'));

        // Check database
        $this->seeInDatabase('contacts', [
            'email' => 'john@example.com',
            'subject' => 'Test Subject'
        ]);

        // Check success message in session
        $this->assertEquals('Thank you for your message! Our team will get back to you shortly.', session('success'));
    }
}
