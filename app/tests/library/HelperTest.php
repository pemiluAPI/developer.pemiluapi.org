<?php

class HelperTest extends TestCase {

    public function setUp()
    {
        parent::setUp();
    }

    public function testNavItem()
    {
        $response = $this->client->request('GET', '/documentation');

        $this->assertEquals($response->filter('li.active')->text(), 'Dokumentasi');
    }

}