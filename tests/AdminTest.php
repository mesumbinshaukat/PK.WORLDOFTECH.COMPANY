<?php

namespace Tests;

use App\Models\AdminUser;
use Illuminate\Support\Facades\Hash;
use Laravel\Lumen\Testing\DatabaseMigrations;

class AdminTest extends TestCase
{
    use DatabaseMigrations;

    public function test_admin_login_success_and_redirection_loop_debug()
    {
        // Create an admin user
        AdminUser::create([
            'username' => 'testadmin',
            'password' => Hash::make('password123'),
        ]);

        // Attempt login
        // We simulate the post request
        $this->post('/admin/login', [
            'username' => 'testadmin',
            'password' => 'password123',
        ]);

        // 1. Should redirect to /admin
        $this->seeStatusCode(302);
        
        // In Lumen tests, we check the Location header
        $this->assertEquals($this->prepareUrlForRequest('/admin'), $this->response->headers->get('Location'));

        // 2. Check session is set
        $this->assertEquals(true, session('admin_logged_in'));

        // 3. Now try to access /admin (dashboard) with the session
        // In Lumen tests, session persists between requests if using $this->call() or similar
        // but let's verify if the next request works
        $this->get('/admin');
        
        // If there is a loop, this would return a 302 to /admin/login
        // If it works, it should return 200
        $this->seeStatusCode(200);
        $this->assertStringContainsString('Admin Dashboard', $this->response->getContent());
    }

    public function test_admin_login_failure()
    {
        $this->post('/admin/login', [
            'username' => 'wrong',
            'password' => 'wrong',
        ], ['HTTP_REFERER' => '/admin/login']);

        $this->seeStatusCode(302);
        $this->assertEquals($this->prepareUrlForRequest('/admin/login'), $this->response->headers->get('Location'));
        $this->assertEquals('Invalid credentials.', session('error'));
    }

    public function test_unauthorized_access_redirects_to_login()
    {
        $this->get('/admin');
        $this->seeStatusCode(302);
        $this->assertEquals($this->prepareUrlForRequest('/admin/login'), $this->response->headers->get('Location'));
    }
}
