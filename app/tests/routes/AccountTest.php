<?php

class AccountTest extends TestCase {

    public function setUp()
    {
        parent::setUp();

        $this->client->followRedirects();

        // Set current authenticated user
        $user = new User();
        $user->email = 'testing@example.com';
        $this->be($user);
    }

    public function testAccountDelete()
    {
        $this->client->request('GET', '/account/delete');

        $this->assertTrue($this->client->getResponse()->isOk());

        $response = $this->client->request('DELETE', '/account/delete');

        $this->assertEquals($response->filter('div.alert')->text(), 'Anda telah logout.');
    }

    public function testAccountPage()
    {
        $this->client->request('GET', '/account');

        $this->assertTrue($this->client->getResponse()->isOk());
    }
}
