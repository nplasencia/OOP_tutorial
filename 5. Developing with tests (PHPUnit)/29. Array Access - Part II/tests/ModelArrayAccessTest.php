<?php

namespace Nplasencia;

use Nplasencia\Model;
use PHPUnit\Framework\TestCase;

class ModelArrayAccessTest extends TestCase
{

    public function test_offset_get()
    {
        $user = new UserTest([
           'name' => 'Nauzet Plasencia',
           'email' => 'nauzet.plasencia.cruz@gmail.com',
           'web' => 'https://alcanzandoloinutil.com'
        ]);

        $this->assertSame('Nauzet Plasencia', $user['name']);
        $this->assertSame('nauzet.plasencia.cruz@gmail.com', $user['email']);
    }

    public function test_offset_exists()
    {
        $user = new UserTest([
            'name' => 'Nauzet Plasencia',
        ]);

        $this->assertTrue(isset($user['name']));

        $this->assertFalse(empty($user['name']));

        $this->assertFalse(isset($user['email']));

        $this->assertTrue(empty($user['email']));
    }

    /** @test */
    public function it_sets_and_gets_values_with_array_access()
    {
        $user = new UserTest;

        $user['name'] = 'Nauzet Plasencia';

        $this->assertSame('Nauzet Plasencia', $user['name']);
    }

    /** @test */
    public function it_can_set_and_unset_properties_with_array_access()
    {
        $user = new UserTest;

        $user['name'] = 'Nauzet Plasencia';

        $this->assertTrue(isset($user['name']));

        unset($user['name']);

        $this->assertFalse(isset($user['name']));
    }
}

class UserTest extends Model implements \ArrayAccess
{

    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }

    public function offsetGet($offset)
    {
        return $this->$offset;
    }

    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
}
