<?php

namespace App\Tests\User;

use App\Entity\User\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testCreateUser(): void
    {
        $user = new User();
        $this->assertNotNull($user);
    }

    public function testSetAndGetEmail(): void
    {
        $email = "test@example.com";
        $user = new User();

        $user->setEmail($email);

        $this->assertEquals($email, $user->getEmail());
    }

    public function testSetAndGetPassword(): void
    {
        $password = "password";
        $user = new User();

        $user->setPassword($password);

        $this->assertEquals($password, $user->getPassword());
    }
}
