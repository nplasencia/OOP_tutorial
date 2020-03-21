<?php

namespace Nplasencia;

use Nplasencia\Model;
use PHPUnit\Framework\TestCase;

class ModelArrayAccessTest extends TestCase
{

    protected function newAnonymousModel(Array $attributes = [])
    {
        return new class($attributes) extends Model{};
    }

    public function test_offset_get()
    {
        $attributes = [
            'name'  => 'Nauzet Plasencia',
            'email' => 'nauzet.plasencia.cruz@gmail.com',
            'web'   => 'https://alcanzandoloinutil.com'
        ];

        $user = $this->newAnonymousModel($attributes);

        $this->assertSame('Nauzet Plasencia', $user['name']);
        $this->assertSame('nauzet.plasencia.cruz@gmail.com', $user['email']);
    }

    public function test_offset_exists()
    {
        $attributes = ['name' => 'Nauzet Plasencia'];

        $user = $this->newAnonymousModel($attributes);

        $this->assertTrue(isset($user['name']));

        $this->assertFalse(empty($user['name']));

        $this->assertFalse(isset($user['email']));

        $this->assertTrue(empty($user['email']));
    }

    /** @test */
    public function it_sets_and_gets_values_with_array_access()
    {
        $user = $this->newAnonymousModel();

        $user['name'] = 'Nauzet Plasencia';

        $this->assertSame('Nauzet Plasencia', $user['name']);
    }

    /** @test */
    public function it_can_set_and_unset_properties_with_array_access()
    {
        $user = $this->newAnonymousModel();

        $user['name'] = 'Nauzet Plasencia';

        $this->assertTrue(isset($user['name']));

        unset($user['name']);

        $this->assertFalse(isset($user['name']));
    }
}

class UserTest extends Model
{

}
