<?php

class AuthenticationTest extends TestCase {

    public function setUp()
    {
        parent::setUp();

        $this->client->followRedirects();
    }

    public function testLoginPage()
    {
        $this->client->request('GET', '/login');

        $this->assertTrue($this->client->getResponse()->isOk());
    }

    public function testLogout()
    {
        // Set current authenticated user
        $user = new User();
        $user->email = 'testing@example.com';
        $this->be($user);

        // Logout
        $response = $this->client->request('GET', '/logout');

        $this->assertEquals($response->filter('div.alert')->text(), 'Anda telah logout.');

        $this->assertNull($this->be($user));
    }
}
