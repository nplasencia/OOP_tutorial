<?php

namespace Nplasencia;

use Nplasencia\Model;
use PHPUnit\Framework\TestCase;

class ArrayAccessTest extends TestCase
{

    public function test_a_model_has_array_access()
    {
        $user = new UserTest([
           'name' => 'Nauzet Plasencia',
           'email' => 'nauzet.plasencia.cruz@gmail.com',
           'web' => 'https://alcanzandoloinutil.com'
        ]);

        $this->assertSame('Nauzet Plasencia', $user['name']);
        $this->assertSame('nauzet.plasencia.cruz@gmail.com', $user['email']);
    }
}

class UserTest extends Model implements \ArrayAccess
{

    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }

    public function offsetGet($offset)
    {
        return $this->getAttribute($offset);
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }
}
