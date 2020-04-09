<?php

namespace App\Tests;

use App\User;
use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
    private $user;

    public function setUp(): void
    {
        $this->user = new User('atari.omar@gmail.com', 24);
    }

    public function testIsValid()
    {
        /**
         * DEBUG with
         * fwrite(STDERR, print_r('message', TRUE));
         */
        $this->user->setFirstname('Omar');
        $this->user->setLastname('ATARI');
        $this->assertNotFalse($this->user->isValid());
    }

    public function testHasInvalidEmail()
    {
        $this->user->setFirstname('Omar');
        $this->user->setLastname('ATARI');
        $this->user->setEmail('gfdgsdfg');
        $this->assertFalse($this->user->isValid());
    }


    public function testHasInvalidAge()
    {
        $this->user->setAge(11);
        $this->user->setFirstname('Omar');
        $this->user->setLastname('ATARI');
        $this->assertFalse($this->user->isValid());
    }

    public function testHasUnspecifiedFirstName()
    {
        $this->user->setLastname('ATARI');
        $this->assertFalse($this->user->isValid());
    }

    public function testHasUnspecifiedLastName()
    {
        $this->user->setFirstname('Omar');
        $this->assertFalse($this->user->isValid());
    }
}
