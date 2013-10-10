<?php

class StaticPagesTest extends TestCase {

    public function setUp()
    {
        parent::setUp();
    }

    public function testAboutPage()
    {
        $this->client->request('GET', '/about');

        $this->assertTrue($this->client->getResponse()->isOk());
    }

    public function testTermsPage()
    {
        $this->client->request('GET', '/terms');

        $this->assertTrue($this->client->getResponse()->isOk());
    }

    public function testEndpointsPage()
    {
        $this->client->request('GET', '/endpoints');

        $this->assertTrue($this->client->getResponse()->isOk());
    }
}