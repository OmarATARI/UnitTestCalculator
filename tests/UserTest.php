<?php

namespace App\Tests;

use App\User;
use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
    public function testIsValid()
    {
        /**
         * DEBUG with
         * fwrite(STDERR, print_r('message', TRUE));
         */
        $user = new User('atari.omar@gmail.com', 24);
        $user->setFirstname('Omar');
        $user->setLastname('ATARI');
        $this->assertNotFalse($user->isValid());
    }

    public function testHasInvalidEmail()
    {
        $user = new User('atari.omar', 24);
        $user->setFirstname('Omar');
        $user->setLastname('ATARI');
        $this->assertFalse($user->isValid());
    }


    public function testHasInvalidAge()
    {
        $user = new User('atari.omar@gmail.com', 11);
        $user->setFirstname('Omar');
        $user->setLastname('ATARI');
        $this->assertFalse($user->isValid());
    }

    public function testHasUnspecifiedFirstName()
    {
        $user = new User('atari.omar@gmail.com', 24);
        $user->setLastname('ATARI');
        $this->assertFalse($user->isValid());
    }

    public function testHasUnspecifiedLastName()
    {
        $user = new User('atari.omar@gmail.com', 24);
        $user->setFirstname('Omar');
        $this->assertFalse($user->isValid());
    }
}
