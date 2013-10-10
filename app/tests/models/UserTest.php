<?php

class UserTest extends TestCase {

    public function setUp()
    {
        parent::setUp();

        $this->user = new User();
        $this->user->email = 'testing@example.com';
        $this->user->password = 'password';
        $this->be($this->user);
    }

    public function testGetReminderEmail()
    {
        $this->assertEquals($this->user->getReminderEmail(), 'testing@example.com');
    }

    public function testGetPassword()
    {
        $this->assertEquals($this->user->getAuthPassword(), 'password');
    }

}