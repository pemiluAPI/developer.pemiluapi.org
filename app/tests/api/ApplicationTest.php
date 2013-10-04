<?php

use Zizaco\FactoryMuff\Facade\FactoryMuff;

class ApplicationTest extends TestCase {

    public function setUp()
    {
        parent::setUp();

        $this->factory = new FactoryMuff;

        $this->application = $this->factory->create(
            'Application', array(
                'title' => 'Kutipan',
                'description' => 'Kumpulan kutipan-kutipan para politisi yang layak diingat.'
            )
        );

        $this->method = 'GET';
        $this->uri = 'api/application';
    }

    public function testRetrievingAnApplication()
    {
        $response = $this->call($this->method, $this->uri, array('apiKey' => $this->application->api_key));

        $this->assertResponseStatus(200);

        $this->assertEquals($response->original['data']['title'], $this->application->title);

    }

    public function testInvalidApiKey()
    {
        $response = $this->call($this->method, $this->uri, array('apiKey' => 'insertsomerandominvalidkeyhere'));

        $this->assertResponseStatus(401);
    }

}