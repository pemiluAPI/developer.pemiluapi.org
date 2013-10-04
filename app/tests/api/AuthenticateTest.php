<?php

use Zizaco\FactoryMuff\Facade\FactoryMuff;

class AuthenticateTest extends TestCase {

    public function setUp()
    {
        parent::setUp();

        $this->factory = new FactoryMuff;

        $this->application = $this->factory->create(
            'Application', array(
                'api_key' => '53eb24d1f5c761fd3ee592ca282fea84'
            )
        );

        $this->method = 'GET';
        $this->uri = 'api/authenticate';
    }

    public function testValidApiKey()
    {
        $this->call($this->method, $this->uri, array('apiKey' => $this->application->api_key));

        $this->assertResponseStatus(200);
    }

    public function testInvalidApiKey()
    {
        $this->call($this->method, $this->uri, array('apiKey' => 'insertsomerandominvalidkeyhere'));

        $this->assertResponseStatus(401);
    }

    public function testWithoutApiKey()
    {
        $this->call($this->method, $this->uri);

        $this->assertResponseStatus(401);
    }

}