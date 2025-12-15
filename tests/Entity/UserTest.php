<?php

namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
 public function testTheAutoticApiTokenSettingWhenAnUserIsCreated(): void
 {
    $user = new User();
    $this->assertNotNull($user->getApiToken());
 }


 public function testThanAnUserHasAtleastOneRoleUser(): void
 {
    $user = new User();
    $this->assertContains('ROLE_USER', $user->getRoles());
 }
}