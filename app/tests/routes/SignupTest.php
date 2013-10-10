<?php

class SignupTest extends TestCase {

    public function setUp()
    {
        parent::setUp();
    }

    public function testAsAnonymous()
    {
        $this->client->request('GET', '/signup');

        $this->assertTrue($this->client->getResponse()->isOk());
    }

    public function testAsAuthenticatedUser()
    {
        $user = new User();
        $user->email = 'testing@example.com';
        $this->be($user);

        $this->call('GET', '/signup');

        $this->assertRedirectedTo('/');
    }

    public function testFailedSignup()
    {
        $this->client->followRedirects();

        $response = $this->client->request('POST', '/signup');

        $this->assertEquals($response->filter('div.alert')->text(), 'Pendaftaran gagal. Silahkan coba lagi.');
    }

    public function testSuccesfulSignup()
    {
        $this->client->followRedirects();

        $response = $this->client->request(
            'POST',
            '/signup',
            array(),
            array(),
            array('Content-Type' => 'application/x-www-form-urlencoded')
        );

        $this->assertEquals($response->filter('div.alert')->text(), 'Pendaftaran gagal. Silahkan coba lagi.');
    }
}